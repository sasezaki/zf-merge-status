<?php

//
$useragent = array(
23058, 23483,23661, 23728, 23772
,24283 ,23989 ,23892 ,23872 ,23772 ,23660 ,23555 ,23483 ,23466 ,23232 ,23214 ,23173 ,23172,23156 ,23130 ,23122 ,23058 
,24532, 24540, 24538, 
);

$useragent = array_combine($useragent, $useragent);
return array(
        'Acl' => array(23480 => 'r23480 ****already merged***'), // <- not has issue no (@todo handle automatic these)
        'Barcode' => array(22999 => 'r22999 [GENERIC] Barcode: remove extra spaces'),
        'InfoCard' => array(
            23279 => 'r23279 merged https://github.com/zendframework/zf2/pull/494'
        ),
        'Service' => array(22628 => 'r22628 ***merged**'), // Twitter
        'Soap' => array(
            22560 => 'r22560 merged',
            22898 => 'r22898 no require (syntax error',
            23266 => 'r23266 merged https://github.com/zendframework/zf2/pull/507',
            23337 => 'r23337 merged https://github.com/zendframework/zf2/pull/507',

        ),
        'Http' => $useragent 
            + array(22537, 22576) //ignore Loader issues
            + array(23073, 23863, 24080, 24269, 24336, 24334), //fixed
        'Text' => array(23856 => 'r23856 [ZF-11234] Zend_Text - Missing require_once.'),
    );


