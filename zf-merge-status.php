<?php
setUp();

if (!isset($argv[1])) {
    echo 'choose component as arg';
    echo json_encode(ZFMerge_Svn::getComponents());
    echo PHP_EOL;
    die();
}
$onlynotice = isset($argv[2]) ? true :false;

if ($argv[1] == 'ALL') {
    foreach (ZFMerge_Svn::getComponents() as $c) {
        if (in_array($c, ZFMerge_Differ::getIgnoreComponents())) continue;
        echo '//////////', $c, '////////////////////////////', PHP_EOL;
        check($c, $onlynotice);
    }
} else {
    check($argv[1], $onlynotice);
}

function check($component, $onlynotice){
    $frontendOptions = array('lifetime' => 86400, 'automatic_serialization' => true);
    $backendOptions = array('cache_dir' => __DIR__.'/zfmerge');
    $cache = Zend_Cache::factory('Core', 'File', $frontendOptions, $backendOptions);
    //$svn = new ZFMerge_Svn($arg_component, $_SERVER['HOME'].'/svn/zf1');
    //$git = new ZFMerge_Git($arg_component, $_SERVER['HOME'].'/git/zf2');

    $differ = new ZFMerge_Differ($component, $cache, 
                             $_SERVER['HOME']. '/dev/svn/zf1-standard-trunk', 
                             $_SERVER['HOME'].'/dev/zendframework_zf2');
    $checks = $differ->check();

    foreach ($checks as $rev => $status) {
        if ($onlynotice && $status->status !== ZFMerge_Status::STATUS_NONE) continue;

        echo '*revision|'. $rev .' ....... ' ;
        echo $status->status, PHP_EOL;
        echo ' - ' . $status->message, PHP_EOL;

        if ($status->status == ZFMerge_Status::STATUS_NONE) {
            echo '[NOTICE] This commit seems to be not reflected to ZF2 yet.', PHP_EOL;
            echo 'http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev='. $rev, PHP_EOL;
        }
        if ($status->status == ZFMerge_Status::STATUS_MERGED) {
            echo ' - ' . $status->commit->id, PHP_EOL;
        }
    
        echo PHP_EOL;
    }
}


/**************************************************************/

function setUp() {
    require_once 'VersionControl/SVN.php';
    require_once 'VersionControl/Git.php';

    // ensure zf1
    set_include_path($_SERVER['HOME'].'/tmp/ZF-1.11.5/'.PATH_SEPARATOR.get_include_path());

    require_once 'Zend/Loader/Autoloader.php';
    $loader = Zend_Loader_Autoloader::getInstance();
}

class ZFMerge_Svn
{
    public $svn_path = '/usr/bin/svn';
    public $svn_local_path;

    public $component;
    protected $svn;

    public static $components = array('Acl', 'Amf', 'Application', 'Auth', 'Barcode', 'Cache', 'Captcha', 'Cloud', 'CodeGenerator', 'Config', 'Console', 'Controller', 'Crypt', 'Currency', 'Date', 'Db', 'Dojo', 'Dom', 'Feed', 'File', 'Filter', 'Form', 'Gdata', 'Http', 'InfoCard', 'Json', 'Layout', 'Ldap', 'Loader', 'Locale', 'Log', 'Mail', 'Markup', 'Measure', 'Memory', 'Mime', 'Navigation', 'Oauth', 'OpenId', 'Paginator', 'Pdf', 'ProgressBar', 'Queue', 'Reflection', 'Rest', 'Search', 'Serializer', 'Server', 'Service', 'Session', 'Soap', 'Tag', 'Test', 'Text', 'TimeSync', 'Tool', 'Translate', 'Uri', 'Validate', 'View', 'Wildfire', 'XmlRpc');

    public static function checkComponent($component)
    {
        //ignore components - which will be update completly (ZF1 component name)
        //$ignore_components = array(
        //    'Cache', 'Loader', 'Db'
        //);

        //if (in_array(ucfirst($component), $ignore_components)) {
        //    throw new Exception("$component is under updateing");
        //}

        if(!in_array($component, static::$components)) {
            throw new Exception("$component is not valid component");
        }

        return $component;

    }

    public function __construct($componet, $svn_local_path)
    {
        $component = static::checkComponent($componet);
        $this->component = $component;
        $this->svn_local_path = $svn_local_path;
    }

    public function getSvnPaths()
    {
        $file_or_dirs = $this->getComponentFiles();

        $paths = array();
        foreach ($file_or_dirs as $file_or_dir) {
            $paths[] = array($file_or_dir);
        }

        return $paths;
    }

    public function getComponentFiles()
    {
        $file_or_dirs = array();
        if (is_dir($dir = $this->svn_local_path .'/library/Zend/' . $this->component)) {
            $file_or_dirs[] = $dir;
        } else if (is_file($file = $this->svn_local_path .'/library/Zend/' . $this->component. '.php')) {
            $file_or_dirs[] = $file;
        }

        return $file_or_dirs;
    }

    public function getLogs()
    {
        $paths = $this->getSvnPaths();
        $switches = array('verbose' => true, 'r' => '{2010-07-05}:HEAD');

        $logsz = array();
        foreach ($paths as $args) {
            $logs = $this->getSvnLog()->log->run($args, $switches);
            if (!is_array($logs)) {
                throw new Exception("logs is not array. args".print_r($args, true). " switches " . print_r($switches, true));
            }

            $logsz = array_merge($logsz, $logs);
        }
    
        return $logsz;
    }

    public function getSvnLog()
    {
        $options = array('fetchmode' => VERSIONCONTROL_SVN_FETCHMODE_ASSOC,
                         'svn_path' => $this->svn_path);
        $svn = VersionControl_SVN::factory(array('log'), $options);

        return $svn;
    }

    public function getSvnDiff()
    {
        $options = array('fetchmode' => VERSIONCONTROL_SVN_FETCHMODE_ASSOC,
                         'svn_path' => $this->svn_path);
        $svn = VersionControl_SVN::factory(array('diff'), $options);

        return $svn;
    }

    public function diff($paths, $rev, $prev = -1)
    {
        // $switches = array('r' => '5:8');
        // $args => array();
        $switches = array('r' => ''. $rev + $prev. ':'. $rev);

        foreach ($paths as $k => $path) {
            $paths[$k] = $this->svn_local_path .$path;
        }

        return $this->getSvnDiff()->diff->run($paths, $switches);
    }

    public function extractRevSet()
    {
        $logs = $this->getLogs();

        return static::extractIssueSet($logs);
    }

    /**
     * 'rev' => 'issue'
     * '22222' => 'ZF-111'
     */
    public static function extractIssueSet(array $logs)
    {
        $issues = array();
        foreach ($logs as $log) {
            // @see zf-status/application/modules/zfstatus/services/Zf.php 
            $pattern = '/(?P<issue>ZF2?-?\d+)/';
            $issues[$log['REVISION']] = (preg_match($pattern, $log['MSG'], $match)) ? $match['issue'] : false;
        }

        return $issues;
    }

    public static function extractIssue($log)
    {
        //$issue = false;
        $pattern = '/(?P<issue>ZF2?-?\d+)/';
        return preg_match($pattern, $log['MSG'], $match) ? $match['issue'] : false;
    }

    public static function getComponents()
    {
        return self::$components;
    }
}

class ZFMerge_Git
{
    public $component, $git_local_path;

    public function __construct($component, $git_local_path)
    {
        $this->component = $component;
        $this->git_local_path = $git_local_path;
    }

    public function getGit()
    {
        $git = new VersionControl_Git($this->git_local_path);
    
        return $git;
    }

    /**
     * @todo Zend_Reflection => Zend\Code\Reflection && Zend\Code\Reflection\
     */
    public function getLogs()
    {
        $fetch = $this->getGit()->getRevListFetcher()
            ->target('library/Zend/'.$this->component)
            ->setOption('all')
            ->setOption('since', '2010-07-05')
            ->fetch();
        return $fetch;
    }

    public function extractRevSet()
    {
        $logs = $this->getLogs();

        return static::extractIssueSet($logs);
    }

    public static function extractIssueSet(array $logs)
    {
        $issues = new SplObjectStorage;
        
        foreach ($logs as $commit) {
            // @see zf-status/application/modules/zfstatus/services/Zf.php 
            $pattern = '/(?P<issue>ZF2?-?\d+)/';
            $issue = (preg_match($pattern, $commit->getMessage(), $match)) ? $match['issue'] : false;
            $issues->attach($commit, $issue);
        }

        return $issues;
    }
}

class ZFMerge_Status
{
    const STATUS_MERGED = 'merged';
    const STATUS_IGNORE = 'ignore';
    const STATUS_NONE = 'none'; // detect as Not merged

    public $status = false;
    public $commit = false;
    public $message = false;
}

class ZFMerge_Differ
{
    protected $cache;
    protected $svn;
    protected $git;
    protected $component; // <- should be ZF1's !!

    public static $ignore_components = array(
        'Cache', 'Db', 'Loader', 'Reflection',
        'Controller',
        'Session' // ??? (<- Already Updated for ZF2. but, I can't judge)
    );

    public $global_ignore_revisions = array(
        23483 => 'ZF-10669 Replace CRLF with LF, trim trailing whitespace',
        23485 => 'ZF-10798 replacing tabs with spaces',
        23772 => 'ZF-11122 Updated the copyright in various docblocks to 2011',
        23650 => '[ZF-10805]: method docblocks contain invalid @param syntax',
        22662 => 'ZF-5413: no double parentheses | NULL -> null (using "$var === null" instaed of "is_null($var)")',
        22661 => 'ZF-5413: fixed my last commit is_null -> === null',
        22660 => 'ZF-5413: use "$var === null" instaed of "is_null($var)"',
    );

    public $ignore_revisions = array(
        'Barcode' => array(22999 => '[GENERIC] Barcode: remove extra spaces'),
        'Text' => array(23856 => '[ZF-11234] Zend_Text - Missing require_once.'),
    );

    public function __construct($component, $cache, $svn_path, $git_path)
    {
        $this->component = $component;
        $this->cache = $cache;
        $this->svn = new ZFMerge_Svn($this->getComponentName(), $svn_path);
        $this->git = new ZFMerge_Git($this->getComponentName(true), $git_path);
    }

    public function getComponentName($changedname = false)
    {
        if ($changedname) {
            switch($this->component) {
                case 'Auth' :
                    return 'Authentication';
                case 'Gdata' :
                    return 'GData';
                case 'Oauth' :
                    return 'OAuth';
                case 'LDAP' :
                    return 'Ldap';
                case 'Translate' :
                    return 'Translator' ;
                case 'Validate' :
                    return 'Validator';
                //case 'Reflection' :
                //    return 'Code\\Reflection';
                default :
                    return $this->component;

            }
        } else {
            return $this->component;
        }
    }

    public function getSvnLogs()
    {
        $key = "zfsvn$this->component";
        if (!$logs = $this->cache->load($key)) {
            $logs = $this->svn->getLogs();
            $this->cache->save($logs, $key, array('zfmerge'));
        }

        return $logs;
    }

    public function cleanCache()
    {
        $this->cache->clean(
                Zend_Cache::CLEANING_MODE_MATCHING_TAG,
                array('zfmerge')
        );
    }

    public function check()
    {
        //$diff = array(/** 'rev' => 'status' */);
        //$diff = $svn_revs = $this->svn->extractRevSet();
        
        $svnlogs = $this->getSvnLogs();
        $diff = $svn_revs = ZFMerge_Svn::extractIssueSet($svnlogs);

        // is merged?
        //
        $revset = $this->git->extractRevSet();
        $revset->rewind();
        do {
            //$key = $ret->key;
            $commit = $revset->current();
            $issue = $revset->getInfo();
            if ($issue !== false && false !== $r = array_keys($svn_revs, $issue)) {
                foreach ($r as $rv) {
                    $status = new ZFMerge_Status;
                    $status->status = ZFMerge_Status::STATUS_MERGED;
                    $status->commit = $commit;
                    $status->message = 'detect as mereged by issue number';
                    
                    $diff[$rv] = $status;
                }
            }
            
            $revset->next();

        } while ($revset->valid());

        // is ignored?
        $reverse = array_reverse($svn_revs);
        $ignores = $this->getIgnores();
        $ignore_revs = array_flip($ignores);
        foreach ($diff as $rev => $commit) {
            if (in_array($rev, $ignore_revs)) {
                $status = new ZFMerge_Status;
                $status->status = ZFMerge_Status::STATUS_IGNORE;
                $status->message = $ignores[$rev];
                $diff[$rev] = $status; //$ignores[$rev];
            }
        }

        foreach ($diff as $rev => $v) {
            if ($v instanceof ZFMerge_Status) continue;
            foreach ($svnlogs as $log) {
                if ($log['REVISION'] == $rev) {
                    $status = new ZFMerge_Status;
                    $status->status = ZFMerge_Status::STATUS_NONE;
                    $status->commit = $log;

                    $current_paths = array();
                    foreach ($log['PATHS'] as $p) {
                        $current_paths[] = $p['PATH'];
                    }

                    // add diff
                    $svndiff = $this->svn->diff($current_paths, $rev);
                    $status->message = $svndiff;

                    $diff[$rev] = $status;
                }
            }
        }

        return $diff;
    }

    public function getIgnores()
    {
        if (isset($this->ignore_revisions[$this->component])) {
            return $this->global_ignore_revisions + $this->ignore_revisions[$this->component];
        } else {
            return $this->global_ignore_revisions;
        }
    }

    public static function getIgnoreComponents()
    {
        return static::$ignore_components;
    }
}

