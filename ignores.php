<?php


//
$useragent = array(
23058, 23483,23661, 23728, 23772
,24283 ,23989 ,23892 ,23872 ,23772 ,23660 ,23555 ,23483 ,23466 ,23232 ,23214 ,23173 ,23172,23156 ,23130 ,23122 ,23058 
,24528, 24532, 24538, 24540, 
24693, 24694,
);

$useragent = array_combine($useragent, $useragent);
return array(
        'Acl' => array(
            23480 => 'r23480 ****already merged***' // <- not has issue no (@todo handle automatic these)
        ),
        'Barcode' => array(
            22999 => 'r22999 [GENERIC] Barcode: remove extra spaces'
        ),
        'Captcha' => array(
            24243 => 'ZF-10991: backport r24242 to trunk remove debugging code'
        ),
        'Config' => array(
            23103 => 'r23103 [1.11] Promoted Zend_Config_Yaml/Json to trunk',
            23120 => 'r23120 [ZF-413 & ZF-414] Zend_Config_Yaml support the multi sections.',

        ),
        'Crypt' => array(
            23438 => 'merged at https://github.com/zendframework/zf2/pull/531'
        ),
        'File' => array(
            24678 => 'r24678 backporting',
            24708 => 'r24708 backporting',
        ),
        'Filter' => array(
            22790 => 'r22790 is merged  https://github.com/zendframework/zf2/commit/0b4c11bd',
            22806 => 'r22896 https://github.com/zendframework/zf2/commit/0b4c11bd', 
            23396 => 'r23396 is merged 2c2bc63d', 
            23822 => 'r23882 is 30eadbcf',  //Filter_Input
            //24004 ,  
            //24006,
        ),
        'InfoCard' => array(
            23279 => 'r23279 merged https://github.com/zendframework/zf2/pull/494'
        ),
        'Json' => array(
            24251 => 'merged library -> 886ed38990 & tests: ->4e629efa',
        ),
        'Ldap' => array(
            22996 => '22996 https://github.com/zendframework/zf2/pull/1227', 
            24349 => '24349 https://github.com/zendframework/zf2/pull/1227', 
            24351 => '24351 https://github.com/zendframework/zf2/pull/1227', 
            24353 => '24353 https://github.com/zendframework/zf2/pull/1227', 
            24610 => '24610 https://github.com/zendframework/zf2/pull/1227',
        ),
        'Log' => array(
            22977 => 'ZF-10472: review tests of Zend_Log',
            23575 => 'already merged - replacement of the function is_integer() alias.',
            23600 => 'r23600 already merged',
            23596 => 'Factory is removed at zf2',
        ),
        'Service' => array(
            22628 => 'r22628 ***merged**', // Twitter
        ),
        'Soap' => array(
            22560 => 'r22560 merged',
            22898 => 'r22898 no require (syntax error',
            23266 => 'r23266 merged https://github.com/zendframework/zf2/pull/507',
            23337 => 'r23337 merged https://github.com/zendframework/zf2/pull/507',
        ),
        'Http' => $useragent 
            + array(22537 => 22537, 22576 => 22576) //ignore Loader issues
            + array(23073 => 23073, 23863 => 23863, 24080 => 24080, 24269 => 24269, 24336 => 24336, 24334 => 24334) //fixed
            + array(
            22810 => 'r22810 headers explode ": " issue will not happen in zf2',
            // 23230 => //ZF-10506: preg_quote hostname before passing to PCRE
            // 23309 => // ZF-10645: allow passing content-type for PUT requests
            23442 => 'r23442, it seems fixed',
            // 23581 public visibilty
            //24193 => //ZF-4236: allow mixing order of POST and FILE fields
            // 24261 => getAdapter
            //24262 => 'r24262 TestAdapter add getConfig',
            //24270 => 'not send PUST data if not content-type'
            // 24299 => ZF-5744: fixed the bug of multiple files upload using the same name[]
            24300 => 'r24300 only remove old comment',
            //// 24387 unmask
       ),
        'Paginator' => array(
            23188 => 'r23188 merged',
            23313 => 'r23313 merged',
        ),
        'Pdf' => array(
            22797 => 'r22797 it seems merged',
        ),
        'Search' => array(
            24166 => 'r24166 ISO8859-1 -> ISO-8859-1',
            24169 => 'r24619 Backed out r24166; Jumped the gun :(',
        ),
        'Text' => array(
            23856 => 'r23856 [ZF-11234] Zend_Text - Missing require_once.',
            24497 => 'r24497 is merged https://github.com/zendframework/zf2/pull/930',
            24499 => 'r24499 is merged https://github.com/zendframework/zf2/pull/930',
        ),
        'Uri' => array(
            23408 => 'comment typo',
            23942 => "ZF2s will not reproduce without normalize (ZF-11060')",
            23979 => 'ZF-11060 Backing out r23942 from Zend_Uri, not a valid fix',
        ),
        'Validate' => array(
            //22832 //thomas
            //24124 is reverveted at 24305 
            24124 => 24124,
            24305 => 24305,
            // 24486  should check http://framework.zend.com/issues/browse/ZF-11784            
            24631 => 'r24631 xxx domain is already merged',
            22540 => 'r22540', 
            22659 => 'r22659', 
            22668 => 'r22668',
            22691 => 'r22691',
            22830 => 'r22830',
            22832 => 'r22832',
            24124 => 'wrong 24124',
            24305 => 'reverted 24124',
            24631 => '24631 .xxx is merged'
        ),
        'View' => array(
        // 22879 => fluent interface
            23058 => 'HttpUserAgent',
        // 23080 => Gravatar (1.11)
            23387 => 'r23387 docblock, missing '*' . is merged',
        
            23390 => 'r23390 is no require zf2',
            
        //move to form view helper's
        //23402, 24059, 24157 24477 24488 , 24750

            //23463 => Helper UserAgent
            
      /** rdfa */      
            23525 => 'fixed http://framework.zend.com/issues/browse/ZF2-229',
            // 23538 => rdfa
            // 23610 => 'ZF-9743' https://github.com/zendframework/zf2/pull/1427/files

            //(23945, 23947, 24058 & is set)
            23991 => 'r23991 View\\Abstract',
            24559 => 'r24559 is Exception.php issue'
        ),
        'XmlRpc' => array(
            24402 => 'r24402 bad fix',
            24480 => 'r24480 fix 24402',            
        ),
    );


