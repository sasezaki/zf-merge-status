<?php


//
$useragent = array(
23058, 23483,23661, 23728, 23772
,24283 ,23989 ,23892 ,23872 ,23772 ,23660 ,23555 ,23483 ,23466 ,23232 ,23214 ,23173 ,23172,23156 ,23130 ,23122 ,23058 
,24528, 24532, 24538, 24540, 
);

$useragent = array_combine($useragent, $useragent);
return array(
        'Acl' => array(23480 => 'r23480 ****already merged***'), // <- not has issue no (@todo handle automatic these)
        'Barcode' => array(22999 => 'r22999 [GENERIC] Barcode: remove extra spaces'),
        'Captcha' => array(24243 => 'ZF-10991: backport r24242 to trunk remove debugging code'),
        'Crypt' => array(23438 => 'merged at https://github.com/zendframework/zf2/pull/531'),
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
            + array(22537 => 22537, 22576 => 22576) //ignore Loader issues
            + array(23073 => 23073, 23863 => 23863, 24080 => 24080, 24269 => 24269, 24336 => 24336, 24334 => 24334), //fixed
        'Paginator' => array(
            23188 => 'r23188 merged',
            23313 => 'r23313 merged'
        ),
        'Text' => array(23856 => 'r23856 [ZF-11234] Zend_Text - Missing require_once.'),
        'Uri' => array(
            23408 => 'comment typo',
            23942 => "ZF2s will not reproduce without normalize (ZF-11060')",
            23979 => 'ZF-11060 Backing out r23942 from Zend_Uri, not a valid fix'
        )
    );


