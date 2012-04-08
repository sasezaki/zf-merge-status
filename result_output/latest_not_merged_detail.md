
##Acl

##Amf
[r23255](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23255)
Zend_Amf: fix for ZF-10579.
[r23315](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23315)
ZF-10365: report Unknown[] for parameters type-hinted as arrays

- Auto-detect array typehints during reflection
- In the Introspector, if a parameter is given an "array" typehint, return it as
  "Unknown[]"
[r23682](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23682)
ZF-10487: AMF3 serialization performance

- Applied patch Amf.perform.ref-writeString-1.10.5.patch
- Also applied spl_object_hash() improvements as suggested in comments
[r23896](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23896)
[ZF-10023] Zend_Amf_Server->_handle() sometimes uses uninitialized variable (resulting in PHP notice in AMF response)
[r24137](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24137)
ZF-10876
Zend_Amf
Argument to Zend_Date cast to integer, causing 2038 bug.  Removed cast.

[r24202](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24202)
Fix semantics to make code cleaner to read

- s/responseBody/requestBodies/ to properly indicate what we're
  iterating
- fixed some logical testing structures to follow CS as well as make
  intent clearer
[r24203](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24203)
ZF-11528: authenticate if credentials are provided and auth adapter present

- Moved authentication out of the request bodies loop in _handle()
  - Test for credentials header, and userid/password keys in it
    - when present, call _handleAuth() with the values
      - if passes, add the authentication header to the response
      - if fails, create an error body
  - In loop, test for an error body
    - if present, add it to the current response body, and loop to the
      next
- Use a switch statement in the request bodies loop to test for encoding
  type
[r24205](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24205)
ZF-11529: simplify ACL population in AMF server

- If an authentication adapter has a getAcl() method, populate the
  server ACL from it (if currently empty)
[r24475](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24475)
[TESTS] Backported r24473 to trunk

ArrayCollection needs to extend ArrayObject

- Test clearly shows it being used in Array-like situation; to do so, must
  extend ArrayObject. Tests now pass.
[r24523](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24523)
[ZF-11783] Zend_Amf
Fixes: Zend_Amf_Response_Http emits notice when $_SERVER['HTTPS'] not defined

[r24543](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24543)
ZF-6130: cast request values to objects when possible

- Added method _castParameters(); introspects prototypes to determine if a
  passed parameter should be cast to an object. If so, creates instance of
  object and loops over parameter assigning values.
- Last prototype parameter definition wins (so if multiple types can be
  specified, the last one specified will be used)
- Requires that parameter types are provided in docblocks

##Auth
[r23693](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23693)
[ZF-11002] ehancement implemented as proposed
[r24184](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24184)
ZF-11523
Zend_Auth
Bound variables lost when passing query to database adapter in Zend_Auth_Adapter_DbTable


##Barcode

##Captcha

##Cloud
[r23004](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23004)
Promoting Zend_Cloud to trunk

- Merged Zend_Cloud (SimpleCloud API) from laboratory to trunk. Includes:
  - documentation
  - tests
  - library code
  - "Cloud Explorer" demo
[r23221](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23221)
ZF-9858: Add cheap moveItem support for S3 adapter
[r23746](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23746)
ZF-11092: Copy/paste error in Zend_Cloud_DocumentService_Adapter_SimpleDb
[r24492](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24492)
Cloud Infrastructure
[r24586](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24586)
ZF-11956 - edited the @return value in phpDoc
[r24696](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24696)
Rackspace adapter for Zend_Cloud_StorageService
[r24699](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24699)
Zend_Cloud documentation + unit test fix
[r24704](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24704)
on PHP 5.2, realpath() returns true if the last segment doesn't exist. Therefore we need to also test with file_exists()

##CodeGenerator
[r23559](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23559)
ZF-10848 removing trailing whitespace from docblocks generated by Zend_CodeGenerator; fixes broken tests
[r23561](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23561)
ZF-6982 and ZF-7369 fix indenting with Zend_CodeGenerator (also affects Zend_Tool)
[r24096](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24096)
ZF-11424
Zend_CodeGenerator
Fixed typo in docblock on require_once in Zend_CodeGenerator_Php_Docblock_Tag

[r24098](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24098)
ZF-11421
ZF-8739
Zend_CodeGenerator
Removed superfluous require_once statements from Zend_CodeGenerator_Php_Docblock_Tag

[r24389](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24389)
Updated a docblock to correct a param class reference

[r24418](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24418)
ZF-11513
Zend_CodeGenerator
Add support for classes which have class constant and instance variable with same name

[r24456](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24456)
ZF-11703 - Zend_CodeGenerator: Fixes corruption of Controllers source code when generating Actions on a file which omits a file level docblock

[r24534](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24534)
[ZF-11847] Zend_CodeGenerator
Fixed typo in Zend_CodeGenerator_Php_File
(Zend_Reflection_file -> Zend_Reflection_File)


##Config
[r23103](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23103)
[1.11] Promoted Zend_Config_Yaml/Json to trunk

- Updated AllTests files to reflect additions
- Updated documentation to reflect additions
- Fixed issue found when running full suite
[r23120](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23120)
[ZF-413 & ZF-414] Zend_Config_Yaml support the multi sections.
[r23293](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23293)
[ZF-10636] Zend_Config

- Fixed comment wrong and added svn:keywords $Id$.
[r23295](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23295)
[CS] Zend_Config

- reverted TABS to 4 spaces
[r24044](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24044)
Doc block updates for Zend_Config_Ini/Xml/Yaml constructor. Fixes ZF-11397
[r24090](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24090)
ZF-11384
Zend_Config
Added support for indented comments in Zend_Config_Yaml

[r24554](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24554)
Fix ZF-11702: Allow constants and booleans to work in lists the same way they work as values

##Console

##Crypt
[r24707](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24707)
Handle situation when openss_pkey_new() cannot generate a private key by throwing and exception. Tests now skip in this scenario

##Currency

##Date
[r22712](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22712)
[GENERIC] I18N:

- finished tag support for caching

##Dojo
[r23060](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23060)
[1.11] Updated Dojo version to 1.5.0
[r23932](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23932)
ZF-7308: Auto-generate a form ID if none provided

- Fixes issues in dijit elements dependent on parent form
[r23933](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23933)
ZF-11301: set "minimum" param to value when no value present

- Fixes issue with both horizontal and vertical slider dijits

##Dom

##Feed
[r23069](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23069)
Fixed issue where including a charset in a feed's Content-Type header would cause an update validation error - ZF-10539

[r23071](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23071)
Made it explicit to use url encoding on raw data in requests - more precautionary than anything needing fixing.

[r23075](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23075)
Updated client request to set urlencoded for raw data in Zend_Feed_Pubsubhubbub_Publisher

[r23077](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23077)
Ensure slash element is omitted when comment count is a boolean false - fixes ZF-10054

[r23090](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23090)
Added support for Atom 1.0 icons to Zend_Feed_Reader/Writer

[r23902](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23902)
ZF-11184
Updated Zend_Feed_Reader::import to throw exception on empty response body before calling self::importString

[r23909](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23909)
ZF-11150
Zend_Feed
Fixed setCommentCount to accept zero as valid quantity of comments

[r24436](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24436)
[ZF-11554] DOCUMENTATION

- Fix typo docblock.

##File

##Filter
[r24004](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24004)
ZF-11344: handle encoding mismatches in HtmlEntities filter

- Detect when encoding mismatches occur
  - Convert value to filter's encoding, ignoring unknown characters, and
    re-run htmlentities()
[r24006](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24006)
ZF-11344: handle cases where no characters translate

- If the filtered string is empty, but the original had a value, we have
  to assume we ran into errors and that the resulting string may fail
  validation criteria. Raise an exception in such cases.

##Form
[r22930](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22930)
ZF-10411: Ensure elements added to groups later are not rendered by both form and group

- DisplayGroup now tracks the form owning it
- DisplayGroup calls new method on form, removeFromIteration(), for each method
  added to it. removeFromIteration() removes the element from the $_order array
  of the form.
[r23298](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23298)
ZF-8315: support module parameter

- Adds support for module parameter of partials consumed by ViewScript decorator
[r23425](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23425)
ZF-10679: Applying patch from Marc Hodgins
[r23757](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23757)
ZF-9710: Omit empty unordered list on subforms with no errors

- Applied test and patch from B. Charbonneau
[r23778](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23778)
ZF-11035: support tag class for labels

- Applied patch; adds getters and setters for label tag class, and HTML
  generation of label tag class attribute
[r23852](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23852)
[ZF-11151] Zend_Form
- Fixed typo in decorator form errors.
[r23941](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23941)
ZF-11339
Zend_Form
Zend_Form_Decorator_Label::getLabel has incorrect return type in docblock

[r24279](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24279)
ZF-8764: prevent double-translation of submit button labels
[r24370](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24370)
Fixes ZF-11652: JS errors from ReCaptcha form decorator.
This became a required parameter in Firefox (we'll NEVER have consistant standards at this rate...)

[r24391](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24391)
Fixes ZF-11634 - Recaptcha form decorator was incompatible with IE (no addEventListener support). Added addEvent proxy.

[r24452](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24452)
ZF-11729: do not render elements in display groups twice

- Added handling in FormElements decorator to ensure that if an element belongs
  to a display group, it is not rendered (until it's _in_ the display group)

##Gdata
[r22880](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22880)
[ZF-10242] Zend_Gdata:

- Fixed implemented the interface Countable.
- Correction in the tests units the count of data was wrong.
[r22972](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22972)
[ZF-10291 & ZF-10437] Zend_Gdata

missing load the file "Zend/Uri/Http".
[r23804](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23804)
ZF-11177: Update Zend_Gdata to use HTTPS by default for all services that fully support it.

This enables HTTPS by default for the following services:
- Zend_Gdata_Books
- Zend_Gdata_Calendar
- Zend_Gdata_Docs
- Zend_Gdata_Gbase
- Zend_Gdata_Photos
- Zend_Gdata_Spreadsheets

Notably, Zend_Gdata_YouTube is omitted due to blocking issues on YouTube's end.

[r24033](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24033)
ZF-11351
Zend_Gdata
Zend_Gdata_AuthSub should not accept vanilla Zend_Http_Client instances

[r24315](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24315)
[ZF-2146]: stop output buffering in case of exception (fix problem in complete test execution)
[r24395](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24395)
Fixes ZF-11468 - usage of https schema over http which is supported by API

[r24583](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24583)
ZF-11948: Use HTTPS for YouTube API requests

Per a request from the YouTube API team, all client requests
should use HTTPS by default.

This patch implements this for Zend_Gdata_YouTube.

Patch-by: Jeffrey Posnick <jeffy@google.com>
Signed-off-by: Trevor Johns <trevorjohns@google.com>
[r24682](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24682)
add Zend_Gdata_Analytics

##Http
[r23230](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23230)
ZF-10506: preg_quote hostname before passing to PCRE
[r23309](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23309)
ZF-10645: allow passing content-type for PUT requests
[r23581](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23581)
ZF-10873: Added public visibility to method

- Added public visibility to setOutputStream() method of interface
[r24193](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24193)
ZF-4236: allow mixing order of POST and FILE fields

- Applied patch from Adam L.
[r24261](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24261)
[ZF-11598] Zend_Http_Client

- Fixed, return of the adapter after constructor.
[r24262](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24262)
[ZF-11599] Zend_Http_Client

- Added Zend_Http_Client_Adapter_Test:getConfig().
[r24270](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24270)
ZF-11030 and ZF-10162 (duplicates)
fixes  and test for  Zend_Http_Client not sending PUT data if not content-type is specified, not sending DELETE data at all is now fixed and tested.
[r24299](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24299)
ZF-5744: fixed the bug of multiple files upload using the same name[]
[r24387](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24387)
ZF-11671: added feature for unmasking query paramsGet

##InfoCard

##Json

##Ldap
[r22996](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22996)
[ZF-10266]
added sizelimit and timelimit parameters to Zend_Ldap::search()

added Zend_Ldap_Converter built by Andreas Heigl

integrated Zend_Ldap_Converter into existing infrastructure
[r24349](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24349)
[ZF-11639]
fixed issue with phone numbers that start with + but are numeric
added test
[r24351](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24351)
[ZF-11611] fixed problem with multi-valued-RDN attributes
[r24353](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24353)
[ZF-11639] removed float-cast because it is actually unimportant to have type-save numeric data here; should not break BC unless users do a strict type check on the return values
[r24610](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24610)
[#ZF-11968] added pre- and post-operation hooks as extension points in sublasses

##Locale
[r22712](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22712)
[GENERIC] I18N:

- finished tag support for caching
[r22807](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22807)
[ZF-10159] Zend_Locale_Format:

- added a detection for PRCE without UTF-8 support and throw an exception before PCRE does it without knowing why
[r22808](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22808)
[ZF-10159] Zend_Locale_Format:

- added a detection for PRCE without UTF-8 support
[r24139](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24139)
ZF-10728
Zend_Locale
Added code to expose /ldml/numbers/defaultNumberingSystem in Zend_Locale_Data

[r24323](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24323)
[ZF-11630]: Problem with Zend_Locale_Format::toNumber and small floats (scientific notation)

##Log
[r23596](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23596)
Zend_Log_FactoryInterface: typo fix in phpdoc

##Mail
[r23128](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23128)
[1.11] Promoted Zend_Mail_Transport_File to trunk
[r23423](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23423)
ZF-8988: Applying patch from Marc Hodgins
[r23475](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23475)
ZF-10741: adding unit tests for Zend_Mail_Protocol_Smtp
[r24162](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24162)
ZF-11514
Zend_Mail
Zend_Mail_Message incorrectly merges configuration flags supplied via constructor

[r24326](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24326)
[TESTS]: fix error in Zend_Mail_FileTransportTest path absent not is assigned.

##Markup
[r24265](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24265)
[ZF-11478] Zend_Markup

- Fixed typo.

##Measure

##Memory

##Mime

##Navigation
[r22882](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22882)
Zend_Nav Allow to set a default page type
[r24118](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24118)
ZF-11359 making Zend_Navigation_Page_Mvc::isActive route aware
[r24234](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24234)
ZF-11550: handle route defaults with null values

- Added test for this case
- Applied patch from Moshe van der Sterre
[r24451](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24451)
ZF-9746: Adds support for the accesskey HTML attribute in Navigation links for Zend\Navigation

[r24454](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24454)
Zend_Navigation: Switched from setFragementIdentifier to setFragment for getters/mutators for consistency

[r24476](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24476)
[TESTS] backport r24474 to trunk

Do not assume front controller has a request

- Only pull parameters from the request if a request object is found

##Oauth
[r23072](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23072)
Updating OAuth HTTP Client to utilise a new RFC 3986 strict option being added to Zend_Http_Client - fixes a problem where RFC 3986 is not being strictly applied.

[r23074](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23074)
Implements original URI query param decoding - Fixes ZF-10344

[r23076](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23076)
Updated raw data header for OAuth in POST body mode

[r23078](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23078)
Fixed misplaced parameter call order on Consumer's redirect() method. Fix is backwards compatible if needed. Fixes ZF-10295

[r23168](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23168)
ZF-5413: using "$var === null" instaed of "is_null($var)"

[r23946](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23946)
ZF-10851
Zend_Oauth
Update component to allow setting oauth realm

[r24363](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24363)
Fixes ZFINC-132 - Yahoo usage of oob as OAuth callback url
[r24414](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24414)
ZF-11663: Incorporate GET parameters set via setParameterGet into Zend_Oauth_Client request


##OpenId
[r23160](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23160)
ZF-10546 and ZF-10547: better handling of glob() return

##Paginator
[r23658](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23658)
[ZF-10884] Zend_Paginator

- Fixed Zend_Paginator_Adapter_DbSelect::setRowCount() with alias set in object select.
[r23717](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23717)
[ZF-7434] Zend_Paginator

- fix adapter select with object select with a single column with zend_db_expr.
[r23724](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23724)
[ZF-10947] Zend_Paginator

- Fix reset part 'order' unnecessary in the object select, that cause a bug in Sqlsrv. 
[r24572](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24572)
ZF-8441: fixed this bug, merged provided fix

##Pdf
[r22797](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22797)
Zend_Pdf: copy pages from one document into another. [ZF-449]
[r22834](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22834)
[ZF-449] Zend_Pdf

- fixed syntax error generated after r22797.
[r22839](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22839)
Zend_Pdf: typo fix [ZF-449].
[r22844](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22844)
Zend_Pdf: remove obsolete method.
[r22908](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22908)
Zend_Pdf: finalized canvases support API [ZF-2139].
[r22909](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22909)
Zend_Pdf: canvases support implementation update. Still needs content stream parser. [ZF-2139].
[r22910](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22910)
Zend_Pdf: minor update for canvaces support implementation. [ZF-2139].
[r23194](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23194)
Zend_Pdf: fix bug in multi-level outlines loading.
[r23394](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23394)
Zend_Pdf. Zend_Search_Lucene: fix file reading. Fixes [ZF-10697].
[r24629](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24629)
[ZF-11989] Added missing require_once calls to Zend_Pdf_Canvas_Abstract

[r24664](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24664)
[ZF-11943] Fix warning emitted from Zend_Pdf_Resource_Font_CidFont when glyph width is null


##ProgressBar

##Queue

##Rest
[r23216](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23216)
Added an action method for receiving HEAD requests to Zend_Rest_Controller and updated unit tests for it and Zend_Rest_Route accordingly
[r23420](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23420)
ZF-9823 #resolve #comment fixes Zend_Rest_Route#assemble such that URLs routing to new|editAction() are supported. Also supports indexAction() routing with additional parameters.

[r23687](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23687)
ZF-10964: Remove duplicate urldecode calls and add related unit tests
[r23884](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23884)
ZF-11281
Zend_Rest_Client_Result::getStatus should check to ensure result has at least one status element
Not doing so raises a PHP error

[r24012](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24012)
ZF-10964
Fixed Zend_Rest_Route to urldecode where appropriate

[r24273](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24273)
fixes ZF-9317 and ZF-9318
about not sending data with Zend_Rest_Client::restDelete
about final methods in Zend_Rest_Client
[r24512](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24512)
fix for ZF-10664 api-change do not merge backward. You can now post a file with Zend_Rest_Client and a prepared Zend_Http_Client, if you do no reset the parameters explicitly

##Search
[r22723](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22723)
Zend_Search_Lucene: fixed bug in terms frequency requesting procedure. Fixes [ZF-5545].
[r22967](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22967)
[ZF-8284] Zend_Search_Lucene

Fixes typo. 
[r22987](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22987)
Zend_Search_Lucene: range query processing bug is fixed [ZF-7518].
[r23391](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23391)
[ZF-10686] Zend_Search_Lucene

- Fixed load html acceptance of attributes in tag <html>

[r23394](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23394)
Zend_Pdf. Zend_Search_Lucene: fix file reading. Fixes [ZF-10697].
[r23906](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23906)
ZF-11157
Split two instructions on same line onto separate lines

[r24143](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24143)
ZF-11482
Zend_Search
Typo in exception message in Zend_Search_Lucene_Document_Html

[r24166](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24166)
ZF-11515
Zend_Search
Fixed typo: ISO8859-1 -> ISO-8859-1

[r24169](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24169)
Backed out r24166; Jumped the gun :(


##Serializer

##Server
[r23182](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23182)
ZF-10583
- Minor enhancement to exception message in Zend_Server_Reflection_Function_Abstract (c/o ~ramsey)
[r23315](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23315)
ZF-10365: report Unknown[] for parameters type-hinted as arrays

- Auto-detect array typehints during reflection
- In the Introspector, if a parameter is given an "array" typehint, return it as
  "Unknown[]"
[r23317](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23317)
ZF-8566: fixed bug while parsing function parameter
[r23319](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23319)
Zend_Server: fix @params recognition dockblock parsing regexp minor error.

##Service
[r22773](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22773)
[ZF-10100] WindowsAzure is out-of-date from PHPAzure
[r22946](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22946)
WindowsAzure functional updates

- Updated Storage object to add method for returning HTTP client
  (getHttpChannelClient()) (makes debugging easier)
- Updated Table to use timestamp of entity, if provided
- Updated TableEntity to allow better timestamp handling
[r22980](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22980)
Better handling for error conditions

- Testing for null did not work if the XML does not have the node. Test for
  isset() || empty().
[r22981](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22981)
Better detection of errors in delete()

- Check for existence AND non-empty value for Error tag in returned XML
[r22982](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22982)
Better detection of queue list

- Check for error code before throwing exception
- Return empty array on empty list
[r22984](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22984)
Better response handling when receiving 0 messages

- Throw error only on error conditions
- Return empty array of messages when no messages returned
[r23004](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23004)
Promoting Zend_Cloud to trunk

- Merged Zend_Cloud (SimpleCloud API) from laboratory to trunk. Includes:
  - documentation
  - tests
  - library code
  - "Cloud Explorer" demo
[r23022](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23022)
Updated Zend_Service_LiveDocx_MailMerge to use 2.0 backend.
[r23105](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23105)
ZF-10552
Merged in Zend_Service_Ebay from incubator to trunk, tests, library & docs

[r23110](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23110)
moved xml tag attributes fetching to a method in Zend_Service_Ebay_Finding objects
[r23112](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23112)
[1.11] Promoted Zend_Service_ShortUrl to trunk
[r23157](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23157)
[1.11] Merged is.gd and metamark.net ShortUrl services to trunk
[r23164](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23164)
ZF-10570: Clear Content-Encoding header between requests
[r23222](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23222)
ZF-10017: allow paths with spaces in S3
[r23261](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23261)
ZF-9084: only allow 15 chars in twitter username regex
[r23267](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23267)
Zend_Service_Amazon: Fixes wrong token assignment in SimpleDb
[r23269](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23269)
Zend_Service_Amazon: fixes SimpleDb endpoint path
[r23271](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23271)
Zend_Service_Amazon: Fixes UTs + Fixes batchput of SimpleDb

SimpleDb::testPutAttributes fixed
SimpleDb::batchPutAttributes fixed to accept array of attribute values, and
allow to specify replace by associtative key.


[r23273](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23273)
Zend_Service_Amazon: Added setValues() mutator to SimpleDb/Attribute class.

Added mutator and fixed testBatchPutAttributes() UTs, which were testing
whether replace argument to batchPutAttributes() works.


[r23311](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23311)
ZF-10644: Add flags to statusUserTimeline()

Added handling for the following flags:
- include_rts
- include_entities
- trim_user
[r23352](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23352)
ZF-10699: Added public visibility to methods

- Added public visibility to shorten() and unshorten() methods of interface
[r23698](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23698)
[ZF-11023] Fix object config in the contructor of the service twitter.
[r23700](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23700)
Zwnd_Service_Amazon_S3: S3 Stream wrapper incorrectly reads data fix. Closes [ZF-10299].
[r23876](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23876)
ZF-11014 fix
[r24047](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24047)
ZF-8578: fixed the cleanBucket() to delete more than 1000 objects
[r24049](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24049)
ZF-6728: createBucket() now support the location according with the PUT syntax of Amazon S3 API
[r24051](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24051)
ZF-10122, ZF-10218, ZF-10219: fixed the problem with ?key URL
[r24053](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24053)
ZF-10122, ZF-10218
[r24082](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24082)
ZF-10219: added the ?versions support
[r24469](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24469)
ZF-10610: fixed the endpoint of the Amazon Sqs region
[r24491](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24491)
Rackspace Service
[r24492](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24492)
Cloud Infrastructure
[r24495](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24495)
Missing files of Zend_Service_Rackspace
[r24555](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24555)
New WindowsAzure component
[r24556](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24556)
Fixed require_once
[r24697](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24697)
WindowsAzure require_once fix

##Soap

##Tag

##Test
[r23655](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23655)
[ZF-10044] Zend_Test

- Fixed allow disable AUTO_QUOTE_IDENTIFIERS.
[r23766](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23766)
ZF-11053
- Various fixes to make the test assets more usable: phpunit.xml is filled, single bootstrap
- Additions to test generated assets: controller tests w/ view action tests
- Fix in the zf.php to use getenv instead of $_ENV

[r24132](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24132)
ZF-11394
Testcase has bad doc block that makes auto-complete less efficient
Updated docblock for getRequest and getResponse to specify the test case classes instead of the abstract one.


##Text

##TimeSync

##Translate
[r22653](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22653)
ZF-10208: replace calls of chr([number]) without a variable argument by a direct string

[r22725](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22725)
[ZF-10051] Zend_Translate:

- added logPriority option
[r22726](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22726)
[ZF-10051] Zend_Translate:

- added missing comment

##Uri
[r23901](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23901)
ZF-11188
Updated Zend_Uri_Http to accept IPv6 URIs as per RFC 2732


##Validate
[r22540](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22540)
[ZF-10116] Zend_Validate_Barcode:

- fixed multi-length error message
[r22659](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22659)
[ZF-9968] Zend_Validate_NotEmpty:

- added object validation
- added count validation
- added serializeable validation
[r22668](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22668)
[ZF-10177] Zend_Validate:

- unified resource content
[r22691](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22691)
[GENERIC] Zend_Validate:

- fix one of the previous changes which broke a feature
[r22830](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22830)
[ZF-10267] Zend_Validate_Hostname:

- added regname support (RFC3986)
[r22832](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22832)
[ZF-9320] Zend_Validate_File_MimeType:

- added a potential rework for a finfo bug
[r24486](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24486)
ZF-11784: User can now disable attempts to use "common" magic files


[r24702](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24702)
support application/x-zip in Zend_Validate_File_IsCompressed

##View
[r22879](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22879)
[ZF-10284] Zend_View

- Added support fluent interface.


[r23058](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23058)
[1.11] Merged Zend_Http_UserAgent to trunk

- Merged Zend_Http_UserAgent to trunk, including:
  - Zend_Http_UserAgent component
  - Useragent Zend_Application resource
  - UserAgent view helper
  - TinySrc view helper
- Updated manual to include new documentation
- Updated test suites with new configuration and tests
[r23080](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23080)
[1.11] Promote Zend_View_Helper_Gravatar to trunk

- Merged in Zend_View_Helper_Gravatar from incubator
  - Updated document structure to make it valid
[r23242](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23242)
ZF-10345: allow specifying id attribute in headLink helper

[r23370](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23370)
ZF-9919: extended serverUrl helper to correctly identify scheme
[r23386](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23386)
[ZF-9324] Zend_View

- FIxed docblock.
[r23387](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23387)
[CS] Zend_View

- Fixed ajust in docblock, missing '*' .
[r23390](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23390)
[ZF-10675] Zend_View_Helper_Json does not enforce replace_header
[r23402](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23402)
ZF-10529: Removed empty ID attributes from submit elements
[r23463](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23463)
[ZF-10759] Zend_View_Helper_UserAgent apply patch "denniswinter".
[r23525](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23525)
Adding XHTML1 RDFA doctype to Zend_View_Helper_Doctype. Resolves ZF-10796
[r23538](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23538)
Added extra method to Doctype helper to test if RDFa is being used. Added test and documentation. See ZF-10796
[r23544](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23544)
[ZF-10793] Zend_View

- Fixed allow set value to class of container.
[r23548](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23548)
ZF-10843 removing unnecessary call to _isValid in Zend_View_Helper_HeadScript
[r23610](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23610)
ZF-9743 Add support for RDFa meta property in HeadMeta view helper; also clarifies documentation for RDFa Doctype view helper
[r23722](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23722)
Zend_View_Helper: headTitle helper minor code readability improvement. Closes [ZF-11013].
[r23945](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23945)
ZF-10791
Zend_Form
Zend_Form method setName() has no effect

[r23991](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23991)
ZF-10042
Added ability to construct view objects with default values
Added ability for Zend_Application view resources to configure view objects with default variables

[r24059](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24059)
ZF-4191
Zend_View
Zend_View_Helper_FormRadio generates improper id attributes for certain values

[r24157](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24157)
ZF-8252
[r24451](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24451)
ZF-9746: Adds support for the accesskey HTML attribute in Navigation links for Zend\Navigation

[r24477](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24477)
ZF-11747: Zend_View_Helper_Form omits closing tag when no content is passed

[r24488](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24488)
reverted r24477 from trunk; undo ZF-11747 (missed use case caused BC break)

[r24559](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24559)
[ZF-11894] Zend_View
Fixed: Zend_View_Exception docblock @package attribute specifies wrong package


##Wildfire
[r23531](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23531)
ZF-10761: Add FirePhp 'Collapsed' option for GROUP_START message type

##XmlRpc
[r23363](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23363)
[ZF-8898] Handling xmlrpc i8 Tags
[r23385](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23385)
[ZF-8580] SystemLookup in Zend_Xmlrpc_Client selects wrong signature
[r23550](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23550)
[ZF-10776] Zend_XmlRpc

- Fixed datetime the format past to object Zend_Date was wrong.
[r24150](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24150)
ZF-1897
Zend_XmlRpc
Resolved issue with leading/trailing whitespace in chunked HTTP response

[r24291](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24291)
ZF-11588: handle string dates and dates beyond unix epoch

- Utilize DateTime instead of strtotime in tests as well as
  Zend_XmlRpc_Value_DateTime
[r24402](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24402)
patching issue ZF-8869
[r24480](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24480)
[TESTS] Backport r24479 to trunk

Do not flush XMLWriter

- XML-RPC XMLWriter-based generation was flushing output, which caused test
  failures. Changed flag to not flush
