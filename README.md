Zend Framework Merge Status Check Tool
======================================
by sasezaki

## What is this ?

This is a Check tool for 

    Zend Framework 1 's issue fix 
     IS MERGED TO
    Zend Framework 2.

## Why ?
ZF2 started developing since July 05 2010. (then ZF2 is branched from ZF1)

But sadly, all ZF1's issue fix is not merged ZF2 completely, now.

This tool aimed to support merging ZF1's commits.

## How to use ?
please set your environment in zfmerge.ini
 - ZF1's svn local checkout.
 - ZF2's git local clone.

sample usage:
<code>
$php zf-merge-status.php Auth
</code>


sample output:
<pre>
*revision|22611 ....... merged
 - detect as mereged by issue number
 - cb4cffa347198c61ced13afde2fd51b2bc14dea3

*revision|22613 ....... merged
 - detect as mereged by issue number
 - cb4cffa347198c61ced13afde2fd51b2bc14dea3

*revision|23088 ....... merged
 - detect as mereged by issue number
 - ec738f2423fd787b704d60c8ee8ae31c129ac6db

*revision|23483 ....... ignore
 - ZF-10669 Replace CRLF with LF, trim trailing whitespace

*revision|23485 ....... ignore
 - ZF-10798 replacing tabs with spaces

*revision|23693 ....... none
 - 
[NOTICE] This commit seems to be not reflected to ZF2 yet.
http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23693

*revision|23772 ....... ignore
 - ZF-11122 Updated the copyright in various docblocks to 2011

*revision|24184 ....... none
 - 
[NOTICE] This commit seems to be not reflected to ZF2 yet.
http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24184
</pre>

## Info
 - http://framework.zend.com/zf2
 - http://framework.zend.com/wiki/display/ZFDEV2/Components+Under+Refactoring

Some component is under re-implementing, so all issue not need to merge.
You should need to know ZF2's developing status.

## Setup with pyrus
<pre>
$php pyrus.phar ./vendor set bin_dir ./vendor/bin
$php pyrus.phar ./vendor install pear/VersionControl_SVN-alpha
$php pyrus.phar ./vendor install pear/VersionControl_Git-alpha
$php pyrus.phar ./vendor channel-discover pear.zfcampus.org
$php pyrus.phar ./vendor install http://pear.zfcampus.org/get/ZF-1.11.10.tgz
</pre>

