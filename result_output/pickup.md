##Acl
##Auth
[r23693](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23693) 2011-02-13T13:51:43.297695Z / sgehrig

<pre>[ZF-11002] ehancement implemented as proposed
</pre>

 - {M} [library/Zend/Auth/Adapter/Ldap.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FAuth%2FAdapter%2FLdap.php&rev=23693)

********************************************

[r24184](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24184) 2011-07-05T13:08:19.459709Z / adamlundrigan

<pre>ZF-11523
Zend_Auth
Bound variables lost when passing query to database adapter in Zend_Auth_Adapter_DbTable
</pre>

 - {M} [library/Zend/Auth/Adapter/DbTable.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FAuth%2FAdapter%2FDbTable.php&rev=24184)

********************************************

##Barcode
##Captcha
[r24821](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24821) 2012-05-29T14:54:50.626607Z / adamlundrigan

<pre>ZF-11858: Fix possible fatal error when Zend_Captcha_Image garbage collection runs multiple times in parallel
</pre>

 - {M} [library/Zend/Captcha/Image.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FCaptcha%2FImage.php&rev=24821)

********************************************

##Console
##Crypt
[r24707](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24707) 2012-04-03T19:16:11.974212Z / rob

<pre>Handle situation when openss_pkey_new() cannot generate a private key by throwing and exception. Tests now skip in this scenario
</pre>

 - {M} [library/Zend/Crypt/Rsa.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FCrypt%2FRsa.php&rev=24707)

 - {M} [tests/Zend/Crypt/Rsa/RsaTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FCrypt%2FRsa%2FRsaTest.php&rev=24707)

********************************************

[r24808](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24808) 2012-05-17T19:56:09.967691Z / rob

<pre>Fix ZF-12204. Patch by Martin Hujer.
</pre>

 - {M} [library/Zend/Crypt/Rsa.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FCrypt%2FRsa.php&rev=24808)

 - {M} [tests/Zend/Crypt/Rsa/RsaTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FCrypt%2FRsa%2FRsaTest.php&rev=24808)

********************************************

##Dom
[r24794](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24794) 2012-05-12T00:20:01.497872Z / adamlundrigan

<pre>ZF-11376: Fix XHTML document detection when beginning with XML declaration
</pre>

 - {M} [library/Zend/Dom/Query.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FDom%2FQuery.php&rev=24794)

 - {M} [tests/Zend/Dom/QueryTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FDom%2FQueryTest.php&rev=24794)

********************************************

[r24830](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24830) 2012-05-30T12:40:05.018995Z / adamlundrigan

<pre>ZF-12106: DomQuery fails to evaluate XPath when there are warnings
</pre>

 - {M} [library/Zend/Dom/Query.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FDom%2FQuery.php&rev=24830)

 - {M} [tests/Zend/Dom/QueryTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FDom%2FQueryTest.php&rev=24830)

********************************************

##Feed
[r23069](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23069) 2010-10-10T10:57:42.549077Z / padraic

<pre>Fixed issue where including a charset in a feed's Content-Type header would cause an update validation error - ZF-10539
</pre>

 - {M} [library/Zend/Feed/Pubsubhubbub/Subscriber/Callback.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FPubsubhubbub%2FSubscriber%2FCallback.php&rev=23069)

********************************************

[r23071](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23071) 2010-10-10T18:19:33.005702Z / padraic

<pre>Made it explicit to use url encoding on raw data in requests - more precautionary than anything needing fixing.
</pre>

 - {M} [library/Zend/Feed/Pubsubhubbub/Subscriber.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FPubsubhubbub%2FSubscriber.php&rev=23071)

********************************************

[r23075](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23075) 2010-10-10T21:31:30.287720Z / padraic

<pre>Updated client request to set urlencoded for raw data in Zend_Feed_Pubsubhubbub_Publisher
</pre>

 - {M} [library/Zend/Feed/Pubsubhubbub/Publisher.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FPubsubhubbub%2FPublisher.php&rev=23075)

********************************************

[r23077](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23077) 2010-10-10T23:06:49.491992Z / padraic

<pre>Ensure slash element is omitted when comment count is a boolean false - fixes ZF-10054
</pre>

 - {M} [library/Zend/Feed/Writer/Extension/Slash/Renderer/Entry.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FWriter%2FExtension%2FSlash%2FRenderer%2FEntry.php&rev=23077)

********************************************

[r23090](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23090) 2010-10-12T17:28:16.110912Z / padraic

<pre>Added support for Atom 1.0 icons to Zend_Feed_Reader/Writer
</pre>

 - {M} [library/Zend/Feed/Reader/Extension/Atom/Feed.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FReader%2FExtension%2FAtom%2FFeed.php&rev=23090)

 - {M} [tests/Zend/Feed/Reader/Feed/AtomTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2FAtomTest.php&rev=23090)

 - {M} [tests/Zend/Feed/Writer/Renderer/Feed/AtomTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FWriter%2FRenderer%2FFeed%2FAtomTest.php&rev=23090)

 - {M} [library/Zend/Feed/Writer/Renderer/Feed/Atom.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FWriter%2FRenderer%2FFeed%2FAtom.php&rev=23090)

 - {M} [library/Zend/Feed/Writer/Feed/FeedAbstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FWriter%2FFeed%2FFeedAbstract.php&rev=23090)

 - {A} [tests/Zend/Feed/Reader/Feed/_files/Atom/icon](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2F_files%2FAtom%2Ficon&rev=23090)

 - {A} [tests/Zend/Feed/Reader/Feed/_files/Atom/icon/plain/none](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2F_files%2FAtom%2Ficon%2Fplain%2Fnone&rev=23090)

 - {A} [tests/Zend/Feed/Reader/Feed/_files/Atom/icon/plain/none/atom10.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2F_files%2FAtom%2Ficon%2Fplain%2Fnone%2Fatom10.xml&rev=23090)

 - {M} [library/Zend/Feed/Writer/Renderer/Feed/Atom/AtomAbstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FWriter%2FRenderer%2FFeed%2FAtom%2FAtomAbstract.php&rev=23090)

 - {A} [tests/Zend/Feed/Reader/Feed/_files/Atom/icon/plain](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2F_files%2FAtom%2Ficon%2Fplain&rev=23090)

 - {A} [tests/Zend/Feed/Reader/Feed/_files/Atom/icon/plain/atom10.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2F_files%2FAtom%2Ficon%2Fplain%2Fatom10.xml&rev=23090)

 - {A} [tests/Zend/Feed/Reader/Feed/_files/Atom/icon/plain/none/atom03.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2F_files%2FAtom%2Ficon%2Fplain%2Fnone%2Fatom03.xml&rev=23090)

 - {A} [tests/Zend/Feed/Reader/Feed/_files/Atom/icon/plain/atom03.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2F_files%2FAtom%2Ficon%2Fplain%2Fatom03.xml&rev=23090)

 - {M} [tests/Zend/Feed/Writer/FeedTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FWriter%2FFeedTest.php&rev=23090)

********************************************

[r23902](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23902) 2011-04-30T06:37:26.231910Z / adamlundrigan

<pre>ZF-11184
Updated Zend_Feed_Reader::import to throw exception on empty response body before calling self::importString
</pre>

 - {M} [tests/Zend/Feed/ReaderTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReaderTest.php&rev=23902)

 - {M} [library/Zend/Feed/Reader.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FReader.php&rev=23902)

********************************************

[r23909](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23909) 2011-04-30T18:27:35.999622Z / adamlundrigan

<pre>ZF-11150
Zend_Feed
Fixed setCommentCount to accept zero as valid quantity of comments
</pre>

 - {M} [tests/Zend/Feed/Writer/EntryTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FWriter%2FEntryTest.php&rev=23909)

 - {M} [library/Zend/Feed/Writer/Entry.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FWriter%2FEntry.php&rev=23909)

********************************************

[r24436](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24436) 2011-09-03T19:27:21.747396Z / ramon

<pre>[ZF-11554] DOCUMENTATION
- Fix typo docblock.
</pre>

 - {M} [library/Zend/Feed/Writer/Extension/RendererAbstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FWriter%2FExtension%2FRendererAbstract.php&rev=24436)

********************************************

[r24710](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24710) 2012-04-16T18:55:12.000443Z / bittarman

<pre>Fixes ZF-12156, removed f before opening php tag
</pre>

 - {M} [library/Zend/Feed/Writer/Deleted.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FWriter%2FDeleted.php&rev=24710)

********************************************

[r24842](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24842) 2012-05-31T18:31:28.680851Z / rob

<pre>Fix ZF-4491: Support the new Microsoft URL Rewrite Module for IIS 7.0.
</pre>

 - {M} [tests/Zend/Soap/AutoDiscoverTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FSoap%2FAutoDiscoverTest.php&rev=24842)

 - {M} [tests/Zend/Controller/Request/HttpTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FController%2FRequest%2FHttpTest.php&rev=24842)

 - {M} [library/Zend/Soap/AutoDiscover.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSoap%2FAutoDiscover.php&rev=24842)

 - {M} [library/Zend/Controller/Request/Http.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FController%2FRequest%2FHttp.php&rev=24842)

 - {M} [library/Zend/Feed/Pubsubhubbub/CallbackAbstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FPubsubhubbub%2FCallbackAbstract.php&rev=24842)

 - {M} [library/Zend/OpenId.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FOpenId.php&rev=24842)

********************************************

##File
##Filter
##Form
[r22930](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22930) 2010-09-09T18:45:18.506459Z / matthew

<pre>ZF-10411: Ensure elements added to groups later are not rendered by both form and group
- DisplayGroup now tracks the form owning it
- DisplayGroup calls new method on form, removeFromIteration(), for each method
added to it. removeFromIteration() removes the element from the $_order array
of the form.
</pre>

 - {M} [library/Zend/Form.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FForm.php&rev=22930)

 - {M} [tests/Zend/Form/FormTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FForm%2FFormTest.php&rev=22930)

 - {M} [library/Zend/Form/DisplayGroup.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FForm%2FDisplayGroup.php&rev=22930)

********************************************

[r24452](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24452) 2011-09-09T15:12:21.686355Z / matthew

<pre>ZF-11729: do not render elements in display groups twice
- Added handling in FormElements decorator to ensure that if an element belongs
to a display group, it is not rendered (until it's _in_ the display group)
</pre>

 - {M} [tests/Zend/Form/FormTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FForm%2FFormTest.php&rev=24452)

 - {M} [library/Zend/Form/Decorator/FormElements.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FForm%2FDecorator%2FFormElements.php&rev=24452)

********************************************

[r24773](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24773) 2012-05-07T22:07:47.360113Z / adamlundrigan

<pre>ZF-12161: Allow setting custom prefix path for CAPTCHA adapters in Zend_Form_Element_Captcha
</pre>

 - {A} [tests/Zend/Form/Element/_files/Captcha](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FForm%2FElement%2F_files%2FCaptcha&rev=24773)

 - {M} [tests/Zend/Form/Element/CaptchaTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FForm%2FElement%2FCaptchaTest.php&rev=24773)

 - {M} [library/Zend/Form/Element/Captcha.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FForm%2FElement%2FCaptcha.php&rev=24773)

 - {A} [tests/Zend/Form/Element/_files/Captcha/Foo.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FForm%2FElement%2F_files%2FCaptcha%2FFoo.php&rev=24773)

********************************************

[r24824](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24824) 2012-05-29T20:27:05.030451Z / rob

<pre>Fix ZF-6061: Zend_View_Helper_FormSubmit with viewscript decorator produces invalid (x)html code. Patch by Frank Brückner.
</pre>

 - {M} [tests/Zend/Form/ElementTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FForm%2FElementTest.php&rev=24824)

 - {M} [library/Zend/Form/Element.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FForm%2FElement.php&rev=24824)

 - {M} [library/Zend/Form/Element/Captcha.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FForm%2FElement%2FCaptcha.php&rev=24824)

 - {A} [tests/Zend/Form/_files/views/withouthelperinattribs.phtml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FForm%2F_files%2Fviews%2Fwithouthelperinattribs.phtml&rev=24824)

 - {M} [tests/Zend/Form/Decorator/ViewScriptTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FForm%2FDecorator%2FViewScriptTest.php&rev=24824)

********************************************

[r24834](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24834) 2012-05-30T13:49:51.042959Z / adamlundrigan

<pre>ZF-6667: Allow implicit placement of labels with Zend_Form_Decorator_Label
</pre>

 - {M} [library/Zend/Form/Decorator/Label.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FForm%2FDecorator%2FLabel.php&rev=24834)

 - {M} [documentation/manual/en/module_specs/Zend_Form-StandardDecorators.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmodule_specs%2FZend_Form-StandardDecorators.xml&rev=24834)

 - {M} [tests/Zend/Form/Decorator/LabelTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FForm%2FDecorator%2FLabelTest.php&rev=24834)

********************************************

[r24848](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24848) 2012-05-31T19:28:48.574432Z / rob

<pre>Fix ZF-12173: Zend_Form and Zend_Form_Element prefix paths are not prefix agnostic (namespaces). Patch by Antonio J García Lagar.
</pre>

 - {M} [library/Zend/Form.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FForm.php&rev=24848)

 - {M} [tests/Zend/Form/FormTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FForm%2FFormTest.php&rev=24848)

 - {M} [tests/Zend/Form/Element/FileTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FForm%2FElement%2FFileTest.php&rev=24848)

 - {M} [tests/Zend/Form/ElementTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FForm%2FElementTest.php&rev=24848)

 - {M} [library/Zend/Form/Element/File.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FForm%2FElement%2FFile.php&rev=24848)

 - {M} [library/Zend/Loader/PluginLoader.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FLoader%2FPluginLoader.php&rev=24848)

 - {M} [library/Zend/Form/Element.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FForm%2FElement.php&rev=24848)

 - {M} [tests/Zend/Form/Element/CaptchaTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FForm%2FElement%2FCaptchaTest.php&rev=24848)

 - {M} [library/Zend/Form/Element/Captcha.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FForm%2FElement%2FCaptcha.php&rev=24848)

********************************************

##Gdata
[r22880](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22880) 2010-08-21T23:44:00.891112Z / ramon

<pre>[ZF-10242] Zend_Gdata:
- Fixed implemented the interface Countable.
- Correction in the tests units the count of data was wrong.
</pre>

 - {M} [library/Zend/Gdata/App/Feed.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FApp%2FFeed.php&rev=22880)

 - {M} [tests/Zend/Gdata/Docs/DocumentListFeedTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FDocs%2FDocumentListFeedTest.php&rev=22880)

 - {M} [tests/Zend/Gdata/Gbase/SnippetFeedTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FGbase%2FSnippetFeedTest.php&rev=22880)

 - {M} [tests/Zend/Gdata/Spreadsheets/ListFeedTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FSpreadsheets%2FListFeedTest.php&rev=22880)

 - {M} [tests/Zend/Gdata/Spreadsheets/CellFeedTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FSpreadsheets%2FCellFeedTest.php&rev=22880)

 - {M} [tests/Zend/Gdata/App/FeedTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FApp%2FFeedTest.php&rev=22880)

 - {M} [tests/Zend/Gdata/Gbase/ItemFeedTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FGbase%2FItemFeedTest.php&rev=22880)

********************************************

[r22972](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22972) 2010-09-18T20:33:53.670319Z / ramon

<pre>[ZF-10291 & ZF-10437] Zend_Gdata
missing load the file "Zend/Uri/Http".
</pre>

 - {M} [library/Zend/Gdata/App.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FApp.php&rev=22972)

********************************************

[r23804](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23804) 2011-03-16T00:53:14.019789Z / tjohns

<pre>ZF-11177: Update Zend_Gdata to use HTTPS by default for all services that fully support it.
This enables HTTPS by default for the following services:
- Zend_Gdata_Books
- Zend_Gdata_Calendar
- Zend_Gdata_Docs
- Zend_Gdata_Gbase
- Zend_Gdata_Photos
- Zend_Gdata_Spreadsheets
Notably, Zend_Gdata_YouTube is omitted due to blocking issues on YouTube's end.
</pre>

 - {M} [library/Zend/Gdata/Gbase/ItemQuery.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FGbase%2FItemQuery.php&rev=23804)

 - {M} [library/Zend/Gdata/Gbase/Query.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FGbase%2FQuery.php&rev=23804)

 - {M} [library/Zend/Gdata/Docs.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FDocs.php&rev=23804)

 - {M} [library/Zend/Gdata/Calendar.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FCalendar.php&rev=23804)

 - {M} [library/Zend/Gdata/Gbase/SnippetQuery.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FGbase%2FSnippetQuery.php&rev=23804)

 - {M} [library/Zend/Gdata/Spreadsheets.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FSpreadsheets.php&rev=23804)

 - {M} [library/Zend/Gdata/Spreadsheets/ListQuery.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FSpreadsheets%2FListQuery.php&rev=23804)

 - {M} [library/Zend/Gdata/Photos.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FPhotos.php&rev=23804)

 - {M} [library/Zend/Gdata/Books.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FBooks.php&rev=23804)

 - {M} [library/Zend/Gdata/Docs/Query.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FDocs%2FQuery.php&rev=23804)

 - {M} [library/Zend/Gdata/Spreadsheets/DocumentQuery.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FSpreadsheets%2FDocumentQuery.php&rev=23804)

 - {M} [library/Zend/Gdata/Spreadsheets/CellQuery.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FSpreadsheets%2FCellQuery.php&rev=23804)

 - {M} [library/Zend/Gdata/Calendar/EventQuery.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FCalendar%2FEventQuery.php&rev=23804)

 - {M} [library/Zend/Gdata/Gbase.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FGbase.php&rev=23804)

********************************************

[r24033](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24033) 2011-05-11T02:31:11.241862Z / adamlundrigan

<pre>ZF-11351
Zend_Gdata
Zend_Gdata_AuthSub should not accept vanilla Zend_Http_Client instances
</pre>

 - {M} [tests/Zend/Gdata/AuthSubTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FAuthSubTest.php&rev=24033)

 - {M} [library/Zend/Gdata/AuthSub.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FAuthSub.php&rev=24033)

********************************************

[r24315](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24315) 2011-07-30T09:56:03.752420Z / mikaelkael

<pre>[ZF-2146]: stop output buffering in case of exception (fix problem in complete test execution)
</pre>

 - {M} [library/Zend/Gdata/AuthSub.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FAuthSub.php&rev=24315)

********************************************

[r24395](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24395) 2011-08-21T14:23:16.389601Z / padraic

<pre>Fixes ZF-11468 - usage of https schema over http which is supported by API
</pre>

 - {M} [library/Zend/Gdata/Docs.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FDocs.php&rev=24395)

********************************************

[r24583](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24583) 2011-12-18T22:11:34.321207Z / tjohns

<pre>ZF-11948: Use HTTPS for YouTube API requests
Per a request from the YouTube API team, all client requests
should use HTTPS by default.
This patch implements this for Zend_Gdata_YouTube.
Patch-by: Jeffrey Posnick <jeffy@google.com>
Signed-off-by: Trevor Johns <trevorjohns@google.com>
</pre>

 - {M} [demos/Zend/Gdata/YouTubeVideoApp/operations.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdemos%2FZend%2FGdata%2FYouTubeVideoApp%2Foperations.php&rev=24583)

 - {M} [tests/Zend/Gdata/YouTubeTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FYouTubeTest.php&rev=24583)

 - {M} [library/Zend/Gdata/YouTube.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FYouTube.php&rev=24583)

 - {M} [tests/Zend/Gdata/YouTubeOnlineTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FYouTubeOnlineTest.php&rev=24583)

 - {M} [library/Zend/Gdata/App.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FApp.php&rev=24583)

 - {M} [demos/Zend/Gdata/YouTubeVideoBrowser/index.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdemos%2FZend%2FGdata%2FYouTubeVideoBrowser%2Findex.php&rev=24583)

********************************************

[r24682](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24682) 2012-03-18T16:03:33.169694Z / danielMitD

<pre>add Zend_Gdata_Analytics
</pre>

 - {A} [library/Zend/Gdata/Analytics/DataFeed.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FAnalytics%2FDataFeed.php&rev=24682)

 - {A} [library/Zend/Gdata/Analytics/Extension/Metric.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FAnalytics%2FExtension%2FMetric.php&rev=24682)

 - {A} [library/Zend/Gdata/Analytics/DataQuery.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FAnalytics%2FDataQuery.php&rev=24682)

 - {A} [library/Zend/Gdata/Analytics/Extension/Property.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FAnalytics%2FExtension%2FProperty.php&rev=24682)

 - {A} [library/Zend/Gdata/Analytics.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FAnalytics.php&rev=24682)

 - {A} [library/Zend/Gdata/Analytics/Extension/Dimension.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FAnalytics%2FExtension%2FDimension.php&rev=24682)

 - {M} [tests/Zend/Gdata/AllTests.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FAllTests.php&rev=24682)

 - {A} [tests/Zend/Gdata/Analytics/_files/TestDataFeed.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FAnalytics%2F_files%2FTestDataFeed.xml&rev=24682)

 - {A} [documentation/manual/de/module_specs/Zend_Gdata_Analytics.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fde%2Fmodule_specs%2FZend_Gdata_Analytics.xml&rev=24682)

 - {M} [documentation/manual/en/manual.xml.in](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmanual.xml.in&rev=24682)

 - {A} [tests/Zend/Gdata/Analytics](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FAnalytics&rev=24682)

 - {A} [tests/Zend/Gdata/Analytics/_files](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FAnalytics%2F_files&rev=24682)

 - {A} [library/Zend/Gdata/Analytics](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FAnalytics&rev=24682)

 - {M} [documentation/manual/de/module_specs/Zend_Gdata-Introduction.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fde%2Fmodule_specs%2FZend_Gdata-Introduction.xml&rev=24682)

 - {A} [library/Zend/Gdata/Analytics/AccountEntry.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FAnalytics%2FAccountEntry.php&rev=24682)

 - {A} [tests/Zend/Gdata/Analytics/AccountFeedTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FAnalytics%2FAccountFeedTest.php&rev=24682)

 - {A} [documentation/manual/en/module_specs/Zend_Gdata_Analytics.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmodule_specs%2FZend_Gdata_Analytics.xml&rev=24682)

 - {A} [library/Zend/Gdata/Analytics/AccountFeed.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FAnalytics%2FAccountFeed.php&rev=24682)

 - {A} [library/Zend/Gdata/Analytics/Extension/TableId.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FAnalytics%2FExtension%2FTableId.php&rev=24682)

 - {A} [library/Zend/Gdata/Analytics/Extension](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FAnalytics%2FExtension&rev=24682)

 - {M} [documentation/manual/en/module_specs/Zend_Gdata-Introduction.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmodule_specs%2FZend_Gdata-Introduction.xml&rev=24682)

 - {A} [tests/Zend/Gdata/Analytics/_files/TestAccountFeed.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FAnalytics%2F_files%2FTestAccountFeed.xml&rev=24682)

 - {A} [tests/Zend/Gdata/Analytics/DataFeedTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FAnalytics%2FDataFeedTest.php&rev=24682)

 - {A} [library/Zend/Gdata/Analytics/DataEntry.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FAnalytics%2FDataEntry.php&rev=24682)

********************************************

[r24777](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24777) 2012-05-08T18:50:23.695086Z / adamlundrigan

<pre>ZF-12187: Disable Google Base API (Zend_Gdata_Gbase) in 1.12.x branch
</pre>

 - {M} [library/Zend/Gdata/Gbase/Feed.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FGbase%2FFeed.php&rev=24777)

 - {M} [tests/Zend/Gdata/Gbase/QueryTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FGbase%2FQueryTest.php&rev=24777)

 - {M} [tests/Zend/Gdata/GbaseOnlineTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FGbaseOnlineTest.php&rev=24777)

 - {M} [library/Zend/Gdata/Gbase/Query.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FGbase%2FQuery.php&rev=24777)

 - {M} [tests/Zend/Gdata/Gbase/SnippetQueryTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FGbase%2FSnippetQueryTest.php&rev=24777)

 - {M} [library/Zend/Gdata/Gbase/SnippetQuery.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FGbase%2FSnippetQuery.php&rev=24777)

 - {M} [tests/Zend/Gdata/Gbase/_files/TestDataGbaseItemFeedSample1.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FGbase%2F_files%2FTestDataGbaseItemFeedSample1.xml&rev=24777)

 - {M} [tests/Zend/Gdata/Gbase/ItemEntryTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FGbase%2FItemEntryTest.php&rev=24777)

 - {D} [documentation/manual/en/module_specs/Zend_Gdata_Gbase.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmodule_specs%2FZend_Gdata_Gbase.xml&rev=24777)

 - {M} [tests/Zend/Gdata/Gbase/ItemFeedTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FGbase%2FItemFeedTest.php&rev=24777)

 - {M} [library/Zend/Gdata/Gbase/ItemEntry.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FGbase%2FItemEntry.php&rev=24777)

 - {M} [library/Zend/Gdata/Gbase/ItemFeed.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FGbase%2FItemFeed.php&rev=24777)

 - {M} [documentation/manual/en/module_specs/Zend_Gdata-Introduction.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmodule_specs%2FZend_Gdata-Introduction.xml&rev=24777)

 - {M} [library/Zend/Gdata/Gbase/Entry.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FGbase%2FEntry.php&rev=24777)

 - {D} [demos/Zend/Gdata/Gbase.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdemos%2FZend%2FGdata%2FGbase.php&rev=24777)

 - {M} [library/Zend/Gdata/Gbase/SnippetEntry.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FGbase%2FSnippetEntry.php&rev=24777)

 - {M} [tests/Zend/Gdata/Gbase/SnippetFeedTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FGbase%2FSnippetFeedTest.php&rev=24777)

 - {D} [documentation/manual/de/module_specs/Zend_Gdata_Gbase.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fde%2Fmodule_specs%2FZend_Gdata_Gbase.xml&rev=24777)

 - {M} [library/Zend/Gdata/Gbase/SnippetFeed.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FGbase%2FSnippetFeed.php&rev=24777)

 - {M} [tests/TestConfiguration.php.dist](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FTestConfiguration.php.dist&rev=24777)

 - {D} [documentation/manual/ja/module_specs/Zend_Gdata_Gbase.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fja%2Fmodule_specs%2FZend_Gdata_Gbase.xml&rev=24777)

 - {M} [tests/Zend/Gdata/AllTests.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FAllTests.php&rev=24777)

 - {M} [library/Zend/Gdata/Gbase/Extension/BaseAttribute.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FGbase%2FExtension%2FBaseAttribute.php&rev=24777)

 - {M} [documentation/manual/en/manual.xml.in](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmanual.xml.in&rev=24777)

 - {M} [tests/Zend/Gdata/Gbase/ItemQueryTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FGbase%2FItemQueryTest.php&rev=24777)

 - {M} [documentation/manual/de/module_specs/Zend_Gdata-Introduction.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fde%2Fmodule_specs%2FZend_Gdata-Introduction.xml&rev=24777)

 - {M} [library/Zend/Gdata/Gbase/ItemQuery.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FGbase%2FItemQuery.php&rev=24777)

 - {M} [documentation/manual/ja/module_specs/Zend_Gdata-Introduction.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fja%2Fmodule_specs%2FZend_Gdata-Introduction.xml&rev=24777)

 - {M} [documentation/manual/en/manual-print1.xml.in](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmanual-print1.xml.in&rev=24777)

 - {M} [tests/Zend/Gdata/Gbase/BaseAttributeTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FGbase%2FBaseAttributeTest.php&rev=24777)

 - {M} [tests/Zend/Gdata/Gbase/_files/TestDataGbaseSnippetFeedSample1.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FGbase%2F_files%2FTestDataGbaseSnippetFeedSample1.xml&rev=24777)

 - {M} [library/Zend/Gdata/Gbase.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FGbase.php&rev=24777)

********************************************

[r24779](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24779) 2012-05-08T19:13:59.379761Z / adamlundrigan

<pre>ZF-12188: Disabled Google Health API (Zend_Gdata_Health) in 1.12.x branch
</pre>

 - {M} [library/Zend/Gdata/Health/ProfileListEntry.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FHealth%2FProfileListEntry.php&rev=24779)

 - {D} [documentation/manual/en/module_specs/Zend_Gdata_Health.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmodule_specs%2FZend_Gdata_Health.xml&rev=24779)

 - {M} [library/Zend/Gdata/Health/ProfileListFeed.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FHealth%2FProfileListFeed.php&rev=24779)

 - {M} [library/Zend/Gdata/Health.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FHealth.php&rev=24779)

 - {M} [library/Zend/Gdata/Health/ProfileEntry.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FHealth%2FProfileEntry.php&rev=24779)

 - {M} [tests/TestConfiguration.php.dist](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FTestConfiguration.php.dist&rev=24779)

 - {D} [demos/Zend/Gdata/Health.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdemos%2FZend%2FGdata%2FHealth.php&rev=24779)

 - {D} [tests/Zend/Gdata/HealthOnlineTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FHealthOnlineTest.php&rev=24779)

 - {M} [library/Zend/Gdata/Health/Extension/Ccr.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FHealth%2FExtension%2FCcr.php&rev=24779)

 - {M} [library/Zend/Gdata/Health/ProfileFeed.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FHealth%2FProfileFeed.php&rev=24779)

 - {M} [tests/Zend/Gdata/AllTests.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FAllTests.php&rev=24779)

 - {D} [documentation/manual/de/module_specs/Zend_Gdata_Health.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fde%2Fmodule_specs%2FZend_Gdata_Health.xml&rev=24779)

 - {M} [library/Zend/Gdata/Health/Query.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FHealth%2FQuery.php&rev=24779)

 - {D} [tests/Zend/Gdata/Health](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FHealth&rev=24779)

 - {M} [documentation/manual/en/manual.xml.in](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmanual.xml.in&rev=24779)

********************************************

[r24796](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24796) 2012-05-12T03:34:26.827153Z / adamlundrigan

<pre>ZF-9479: Update Zend_Gdata_YouTube to work with v2.0 API
</pre>

 - {M} [library/Zend/Gdata/YouTube.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FGdata%2FYouTube.php&rev=24796)

 - {M} [tests/Zend/Gdata/YouTubeOnlineTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FGdata%2FYouTubeOnlineTest.php&rev=24796)

********************************************

##InfoCard
##Json
[r24807](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24807) 2012-05-15T12:10:42.144694Z / adamlundrigan

<pre>ZF-11906: Fix some array to string conversion errors for PHP 5.4 compatibility
</pre>

 - {M} [library/Zend/Config/Yaml.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FConfig%2FYaml.php&rev=24807)

 - {M} [library/Zend/Locale/Format.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FLocale%2FFormat.php&rev=24807)

 - {M} [library/Zend/Cache/Core.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FCache%2FCore.php&rev=24807)

 - {M} [library/Zend/Validate/Abstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FValidate%2FAbstract.php&rev=24807)

 - {M} [library/Zend/Json/Server/Response.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FJson%2FServer%2FResponse.php&rev=24807)

********************************************

##Ldap
##Log
##Measure
##Memory
##Mime
##Navigation
[r22882](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22882) 2010-08-22T14:00:16.864201Z / freak

<pre>Zend_Nav Allow to set a default page type
</pre>

 - {M} [library/Zend/Application/Resource/Navigation.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FApplication%2FResource%2FNavigation.php&rev=22882)

 - {M} [library/Zend/Navigation/Page.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FNavigation%2FPage.php&rev=22882)

********************************************

[r24118](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24118) 2011-06-04T14:26:28.035717Z / freak

<pre>ZF-11359 making Zend_Navigation_Page_Mvc::isActive route aware
</pre>

 - {M} [tests/Zend/Navigation/Page/MvcTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FNavigation%2FPage%2FMvcTest.php&rev=24118)

 - {M} [library/Zend/Navigation/Page/Mvc.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FNavigation%2FPage%2FMvc.php&rev=24118)

********************************************

[r24234](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24234) 2011-07-13T18:12:34.973470Z / matthew

<pre>ZF-11550: handle route defaults with null values
- Added test for this case
- Applied patch from Moshe van der Sterre
</pre>

 - {M} [tests/Zend/Navigation/Page/MvcTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FNavigation%2FPage%2FMvcTest.php&rev=24234)

 - {M} [library/Zend/Navigation/Page/Mvc.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FNavigation%2FPage%2FMvc.php&rev=24234)

********************************************

[r24451](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24451) 2011-09-06T17:36:17.721787Z / padraic

<pre>ZF-9746: Adds support for the accesskey HTML attribute in Navigation links for Zend\Navigation
</pre>

 - {A} [tests/Zend/View/Helper/Navigation/_files/expected/menu/accesskey.html](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FNavigation%2F_files%2Fexpected%2Fmenu%2Faccesskey.html&rev=24451)

 - {M} [tests/Zend/Navigation/PageTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FNavigation%2FPageTest.php&rev=24451)

 - {M} [tests/Zend/View/Helper/Navigation/TestAbstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FNavigation%2FTestAbstract.php&rev=24451)

 - {M} [tests/Zend/View/Helper/Navigation/MenuTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FNavigation%2FMenuTest.php&rev=24451)

 - {M} [library/Zend/Navigation/Page.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FNavigation%2FPage.php&rev=24451)

 - {M} [library/Zend/View/Helper/Navigation/Menu.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FNavigation%2FMenu.php&rev=24451)

 - {M} [tests/Zend/View/Helper/Navigation/_files/navigation.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FNavigation%2F_files%2Fnavigation.xml&rev=24451)

********************************************

[r24454](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24454) 2011-09-11T12:48:00.357903Z / padraic

<pre>Zend_Navigation: Switched from setFragementIdentifier to setFragment for getters/mutators for consistency
</pre>

 - {M} [tests/Zend/Navigation/Page/UriTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FNavigation%2FPage%2FUriTest.php&rev=24454)

 - {M} [tests/Zend/Navigation/PageTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FNavigation%2FPageTest.php&rev=24454)

 - {M} [library/Zend/Navigation/Page/Uri.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FNavigation%2FPage%2FUri.php&rev=24454)

 - {M} [library/Zend/Navigation/Page.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FNavigation%2FPage.php&rev=24454)

 - {M} [tests/Zend/Navigation/Page/MvcTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FNavigation%2FPage%2FMvcTest.php&rev=24454)

 - {M} [library/Zend/Navigation/Page/Mvc.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FNavigation%2FPage%2FMvc.php&rev=24454)

********************************************

[r24476](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24476) 2011-09-26T19:47:12.505440Z / matthew

<pre>[TESTS] backport r24474 to trunk
Do not assume front controller has a request
- Only pull parameters from the request if a request object is found
</pre>

 - {M} [library/Zend/Navigation/Page/Mvc.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FNavigation%2FPage%2FMvc.php&rev=24476)

********************************************

[r24850](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24850) 2012-05-31T19:33:41.766211Z / rob

<pre>Fix ZF-12114: Zend_Navigation_Page_Mvc::getHref double return value.
</pre>

 - {M} [library/Zend/Navigation/Page/Mvc.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FNavigation%2FPage%2FMvc.php&rev=24850)

********************************************

[r24854](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24854) 2012-05-31T23:44:06.151571Z / adamlundrigan

<pre>ZF-11805: Improve error messages in Zend_Navigation
</pre>

 - {M} [tests/Zend/Navigation/PageTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FNavigation%2FPageTest.php&rev=24854)

 - {M} [library/Zend/Navigation/Page.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FNavigation%2FPage.php&rev=24854)

 - {M} [documentation/manual/en/module_specs/Zend_Navigation-Containers.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmodule_specs%2FZend_Navigation-Containers.xml&rev=24854)

********************************************

[r24857](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24857) 2012-06-01T01:20:48.247334Z / adamlundrigan

<pre>ZF-11664: Allow manually setting Zend_Navigation_Page_Mvc::isActive
</pre>

 - {M} [tests/Zend/Navigation/Page/MvcTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FNavigation%2FPage%2FMvcTest.php&rev=24857)

 - {M} [library/Zend/Navigation/Page/Mvc.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FNavigation%2FPage%2FMvc.php&rev=24857)

********************************************

##Oauth
[r23072](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23072) 2010-10-10T20:04:37.359648Z / padraic

<pre>Updating OAuth HTTP Client to utilise a new RFC 3986 strict option being added to Zend_Http_Client - fixes a problem where RFC 3986 is not being strictly applied.
</pre>

 - {M} [library/Zend/Oauth/Client.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FOauth%2FClient.php&rev=23072)

********************************************

[r23074](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23074) 2010-10-10T20:19:55.378197Z / padraic

<pre>Implements original URI query param decoding - Fixes ZF-10344
</pre>

 - {M} [library/Zend/Oauth/Client.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FOauth%2FClient.php&rev=23074)

********************************************

[r23076](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23076) 2010-10-10T21:37:20.888026Z / padraic

<pre>Updated raw data header for OAuth in POST body mode
</pre>

 - {M} [library/Zend/Oauth/Http/RequestToken.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FOauth%2FHttp%2FRequestToken.php&rev=23076)

 - {M} [library/Zend/Oauth/Client.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FOauth%2FClient.php&rev=23076)

********************************************

[r23078](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23078) 2010-10-10T23:14:22.371065Z / padraic

<pre>Fixed misplaced parameter call order on Consumer's redirect() method. Fix is backwards compatible if needed. Fixes ZF-10295
</pre>

 - {M} [library/Zend/Oauth/Consumer.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FOauth%2FConsumer.php&rev=23078)

********************************************

[r23168](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23168) 2010-10-19T18:28:04.751499Z / mabe

<pre>ZF-5413: using "$var === null" instaed of "is_null($var)"
</pre>

 - {M} [library/Zend/Feed/Reader/Extension/Atom/Feed.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FReader%2FExtension%2FAtom%2FFeed.php&rev=23168)

 - {M} [library/Zend/Oauth/Consumer.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FOauth%2FConsumer.php&rev=23168)

 - {M} [library/Zend/Service/WindowsAzure/Storage/Table.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FService%2FWindowsAzure%2FStorage%2FTable.php&rev=23168)

 - {M} [library/Zend/View/Helper/HeadTitle.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FHeadTitle.php&rev=23168)

 - {M} [library/Zend/Feed/Pubsubhubbub/Subscriber.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FPubsubhubbub%2FSubscriber.php&rev=23168)

 - {M} [library/Zend/Feed/Reader/Feed/Rss.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FReader%2FFeed%2FRss.php&rev=23168)

 - {M} [library/Zend/Feed/Reader/Extension/Atom/Entry.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FReader%2FExtension%2FAtom%2FEntry.php&rev=23168)

********************************************

[r23946](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23946) 2011-05-02T22:54:21.888756Z / adamlundrigan

<pre>ZF-10851
Zend_Oauth
Update component to allow setting oauth realm
</pre>

 - {M} [library/Zend/Oauth/Config.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FOauth%2FConfig.php&rev=23946)

 - {M} [library/Zend/Oauth/Config/ConfigInterface.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FOauth%2FConfig%2FConfigInterface.php&rev=23946)

 - {M} [library/Zend/Oauth/Client.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FOauth%2FClient.php&rev=23946)

 - {M} [tests/Zend/Oauth/OauthTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FOauth%2FOauthTest.php&rev=23946)

********************************************

[r24363](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24363) 2011-08-13T14:10:23.990544Z / padraic

<pre>Fixes ZFINC-132 - Yahoo usage of oob as OAuth callback url
</pre>

 - {M} [library/Zend/Oauth/Config.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FOauth%2FConfig.php&rev=24363)

********************************************

[r24414](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24414) 2011-08-27T22:01:07.276988Z / adamlundrigan

<pre>ZF-11663: Incorporate GET parameters set via setParameterGet into Zend_Oauth_Client request
</pre>

 - {M} [library/Zend/Oauth/Client.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FOauth%2FClient.php&rev=24414)

 - {M} [tests/Zend/Oauth/OauthTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FOauth%2FOauthTest.php&rev=24414)

********************************************

##Paginator
[r23658](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23658) 2011-01-22T16:11:24.261465Z / ramon

<pre>[ZF-10884] Zend_Paginator
- Fixed Zend_Paginator_Adapter_DbSelect::setRowCount() with alias set in object select.
</pre>

 - {M} [tests/Zend/Paginator/Adapter/DbSelectTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FPaginator%2FAdapter%2FDbSelectTest.php&rev=23658)

 - {M} [library/Zend/Paginator/Adapter/DbSelect.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPaginator%2FAdapter%2FDbSelect.php&rev=23658)

********************************************

[r23717](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23717) 2011-02-18T03:53:17.788445Z / ramon

<pre>[ZF-7434] Zend_Paginator
- fix adapter select with object select with a single column with zend_db_expr.
</pre>

 - {M} [tests/Zend/Paginator/Adapter/DbSelectTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FPaginator%2FAdapter%2FDbSelectTest.php&rev=23717)

 - {M} [library/Zend/Paginator/Adapter/DbSelect.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPaginator%2FAdapter%2FDbSelect.php&rev=23717)

********************************************

[r23724](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23724) 2011-02-18T15:32:55.039111Z / ramon

<pre>[ZF-10947] Zend_Paginator
- Fix reset part 'order' unnecessary in the object select, that cause a bug in Sqlsrv.
</pre>

 - {M} [library/Zend/Paginator/Adapter/DbSelect.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPaginator%2FAdapter%2FDbSelect.php&rev=23724)

********************************************

[r24572](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24572) 2011-12-08T12:15:18.564973Z / bate

<pre>ZF-8441: fixed this bug, merged provided fix
</pre>

 - {M} [library/Zend/Paginator/Adapter/DbSelect.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPaginator%2FAdapter%2FDbSelect.php&rev=24572)

********************************************

[r24754](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24754) 2012-05-05T02:30:56.685550Z / adamlundrigan

<pre>ZF-6989: Zend_Paginator_Adapter_DbSelect should not use Select object in serialization
</pre>

 - {M} [library/Zend/Paginator.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPaginator.php&rev=24754)

 - {M} [tests/Zend/Paginator/Adapter/DbSelectTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FPaginator%2FAdapter%2FDbSelectTest.php&rev=24754)

 - {M} [library/Zend/Paginator/Adapter/DbSelect.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPaginator%2FAdapter%2FDbSelect.php&rev=24754)

 - {M} [tests/Zend/PaginatorTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FPaginatorTest.php&rev=24754)

********************************************

##Pdf
[r22834](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22834) 2010-08-15T16:36:11.264976Z / ramon

<pre>[ZF-449] Zend_Pdf
- fixed syntax error generated after r22797.
</pre>

 - {M} [library/Zend/Pdf/Resource.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FResource.php&rev=22834)

********************************************

[r22839](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22839) 2010-08-15T22:26:35.159505Z / alexander

<pre>Zend_Pdf: typo fix [ZF-449].
</pre>

 - {M} [library/Zend/Pdf/Resource.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FResource.php&rev=22839)

********************************************

[r22844](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22844) 2010-08-16T15:38:53.727714Z / alexander

<pre>Zend_Pdf: remove obsolete method.
</pre>

 - {M} [library/Zend/Pdf/Element/Object.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FElement%2FObject.php&rev=22844)

********************************************

[r22908](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22908) 2010-08-25T20:52:47.569301Z / alexander

<pre>Zend_Pdf: finalized canvases support API [ZF-2139].
</pre>

 - {A} [library/Zend/Pdf/Canvas/Interface.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FCanvas%2FInterface.php&rev=22908)

 - {A} [library/Zend/Pdf/Canvas.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FCanvas.php&rev=22908)

 - {M} [library/Zend/Pdf/Page.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FPage.php&rev=22908)

 - {A} [library/Zend/Pdf/Canvas/Abstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FCanvas%2FAbstract.php&rev=22908)

 - {M} [library/Zend/Pdf/Style.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FStyle.php&rev=22908)

 - {M} [library/Zend/Pdf.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf.php&rev=22908)

 - {A} [library/Zend/Pdf/Canvas](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FCanvas&rev=22908)

 - {M} [library/Zend/Pdf/Resource.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FResource.php&rev=22908)

 - {A} [library/Zend/Pdf/Resource/GraphicsState.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FResource%2FGraphicsState.php&rev=22908)

 - {M} [library/Zend/Pdf/Resource/Image.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FResource%2FImage.php&rev=22908)

********************************************

[r22909](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22909) 2010-08-27T19:57:48.452487Z / alexander

<pre>Zend_Pdf: canvases support implementation update. Still needs content stream parser. [ZF-2139].
</pre>

 - {M} [library/Zend/Pdf/Element/Object/Stream.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FElement%2FObject%2FStream.php&rev=22909)

 - {A} [library/Zend/Pdf/Resource/Unified.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FResource%2FUnified.php&rev=22909)

 - {M} [library/Zend/Pdf/Canvas/Interface.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FCanvas%2FInterface.php&rev=22909)

 - {M} [library/Zend/Pdf/Canvas.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FCanvas.php&rev=22909)

 - {M} [library/Zend/Pdf/Page.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FPage.php&rev=22909)

 - {A} [library/Zend/Pdf/Resource/ContentStream.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FResource%2FContentStream.php&rev=22909)

 - {M} [library/Zend/Pdf/Canvas/Abstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FCanvas%2FAbstract.php&rev=22909)

 - {M} [library/Zend/Pdf/Resource.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FResource.php&rev=22909)

 - {M} [library/Zend/Pdf/Resource/GraphicsState.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FResource%2FGraphicsState.php&rev=22909)

********************************************

[r22910](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22910) 2010-08-27T21:13:49.973614Z / alexander

<pre>Zend_Pdf: minor update for canvaces support implementation. [ZF-2139].
</pre>

 - {M} [library/Zend/Pdf/Canvas/Abstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FCanvas%2FAbstract.php&rev=22910)

********************************************

[r23194](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23194) 2010-10-21T10:10:36.114989Z / alexander

<pre>Zend_Pdf: fix bug in multi-level outlines loading.
</pre>

 - {M} [library/Zend/Pdf/Outline/Loaded.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FOutline%2FLoaded.php&rev=23194)

********************************************

[r23394](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23394) 2010-11-19T15:28:15.052439Z / alexander

<pre>Zend_Pdf. Zend_Search_Lucene: fix file reading. Fixes [ZF-10697].
</pre>

 - {M} [library/Zend/Pdf/Parser.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FParser.php&rev=23394)

 - {M} [library/Zend/Pdf/Resource/Image/Png.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FResource%2FImage%2FPng.php&rev=23394)

 - {M} [library/Zend/Pdf/Resource/Image/Jpeg.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FResource%2FImage%2FJpeg.php&rev=23394)

 - {M} [library/Zend/Search/Lucene/Storage/File/Filesystem.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene%2FStorage%2FFile%2FFilesystem.php&rev=23394)

********************************************

[r24629](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24629) 2012-02-23T23:17:32.838091Z / adamlundrigan

<pre>[ZF-11989] Added missing require_once calls to Zend_Pdf_Canvas_Abstract
</pre>

 - {M} [library/Zend/Pdf/Canvas/Abstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FCanvas%2FAbstract.php&rev=24629)

********************************************

[r24664](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24664) 2012-02-26T16:36:51.205916Z / adamlundrigan

<pre>[ZF-11943] Fix warning emitted from Zend_Pdf_Resource_Font_CidFont when glyph width is null
</pre>

 - {M} [library/Zend/Pdf/Resource/Font/CidFont.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FResource%2FFont%2FCidFont.php&rev=24664)

********************************************

[r24806](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24806) 2012-05-15T11:32:11.466254Z / adamlundrigan

<pre>ZF-12093: Remove abstract constructor from Zend_Pdf_FileParserDataSource to prevent E_STRICT error
</pre>

 - {M} [library/Zend/Pdf/FileParserDataSource.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FFileParserDataSource.php&rev=24806)

********************************************

##ProgressBar
##Queue
##Rest
[r23216](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23216) 2010-10-22T01:45:55.856069Z / elazar

<pre>Added an action method for receiving HEAD requests to Zend_Rest_Controller and updated unit tests for it and Zend_Rest_Route accordingly
</pre>

 - {M} [tests/Zend/Rest/RouteTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FRest%2FRouteTest.php&rev=23216)

 - {M} [tests/Zend/Rest/ControllerTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FRest%2FControllerTest.php&rev=23216)

 - {M} [library/Zend/Rest/Controller.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FRest%2FController.php&rev=23216)

********************************************

[r23420](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23420) 2010-11-21T09:43:19.234466Z / wilmoore

<pre>ZF-9823 #resolve #comment fixes Zend_Rest_Route#assemble such that URLs routing to new|editAction() are supported. Also supports indexAction() routing with additional parameters.
</pre>

 - {M} [tests/Zend/Rest/RouteTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FRest%2FRouteTest.php&rev=23420)

 - {M} [library/Zend/Rest/Route.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FRest%2FRoute.php&rev=23420)

********************************************

[r23687](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23687) 2011-02-01T22:25:48.215208Z / bradley.holt

<pre>ZF-10964: Remove duplicate urldecode calls and add related unit tests
</pre>

 - {M} [tests/Zend/Rest/RouteTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FRest%2FRouteTest.php&rev=23687)

 - {M} [library/Zend/Rest/Route.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FRest%2FRoute.php&rev=23687)

********************************************

[r23884](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23884) 2011-04-29T03:07:41.027695Z / adamlundrigan

<pre>ZF-11281
Zend_Rest_Client_Result::getStatus should check to ensure result has at least one status element
Not doing so raises a PHP error
</pre>

 - {M} [library/Zend/Rest/Client/Result.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FRest%2FClient%2FResult.php&rev=23884)

 - {M} [tests/Zend/Rest/ClientTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FRest%2FClientTest.php&rev=23884)

********************************************

[r24012](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24012) 2011-05-04T21:12:01.312434Z / ralph

<pre>ZF-10964
Fixed Zend_Rest_Route to urldecode where appropriate
</pre>

 - {M} [tests/Zend/Rest/RouteTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FRest%2FRouteTest.php&rev=24012)

 - {M} [library/Zend/Rest/Route.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FRest%2FRoute.php&rev=24012)

********************************************

[r24273](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24273) 2011-07-28T09:13:25.530506Z / mcleod@spaceweb.nl

<pre>fixes ZF-9317 and ZF-9318
about not sending data with Zend_Rest_Client::restDelete
about final methods in Zend_Rest_Client
</pre>

 - {M} [tests/Zend/Rest/ClientTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FRest%2FClientTest.php&rev=24273)

 - {M} [library/Zend/Rest/Client.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FRest%2FClient.php&rev=24273)

********************************************

[r24512](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24512) 2011-10-17T20:01:49.420139Z / mcleod@spaceweb.nl

<pre>fix for ZF-10664 api-change do not merge backward. You can now post a file with Zend_Rest_Client and a prepared Zend_Http_Client, if you do no reset the parameters explicitly
</pre>

 - {M} [tests/Zend/Rest/ClientTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FRest%2FClientTest.php&rev=24512)

 - {M} [library/Zend/Rest/Client.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FRest%2FClient.php&rev=24512)

********************************************

##Search
[r22723](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22723) 2010-07-29T22:03:24.204469Z / alexander

<pre>Zend_Search_Lucene: fixed bug in terms frequency requesting procedure. Fixes [ZF-5545].
</pre>

 - {M} [library/Zend/Search/Lucene/Index/SegmentInfo.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene%2FIndex%2FSegmentInfo.php&rev=22723)

********************************************

[r22967](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22967) 2010-09-18T18:53:58.691070Z / ramon

<pre>[ZF-8284] Zend_Search_Lucene
Fixes typo.
</pre>

 - {M} [library/Zend/Search/Lucene/MultiSearcher.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene%2FMultiSearcher.php&rev=22967)

********************************************

[r22987](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=22987) 2010-09-21T10:39:53.462090Z / alexander

<pre>Zend_Search_Lucene: range query processing bug is fixed [ZF-7518].
</pre>

 - {M} [library/Zend/Search/Lucene/Index/SegmentInfo.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene%2FIndex%2FSegmentInfo.php&rev=22987)

 - {M} [library/Zend/Search/Lucene/Search/Query/Range.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene%2FSearch%2FQuery%2FRange.php&rev=22987)

 - {M} [tests/Zend/Search/Lucene/LuceneTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FSearch%2FLucene%2FLuceneTest.php&rev=22987)

 - {M} [library/Zend/Search/Lucene/Index/TermsStream/Interface.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene%2FIndex%2FTermsStream%2FInterface.php&rev=22987)

 - {M} [library/Zend/Search/Lucene/TermStreamsPriorityQueue.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene%2FTermStreamsPriorityQueue.php&rev=22987)

 - {M} [library/Zend/Search/Lucene.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene.php&rev=22987)

********************************************

[r23391](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23391) 2010-11-19T09:49:03.199822Z / ramon

<pre>[ZF-10686] Zend_Search_Lucene
- Fixed load html acceptance of attributes in tag <html>
</pre>

 - {M} [tests/Zend/Search/Lucene/DocumentTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FSearch%2FLucene%2FDocumentTest.php&rev=23391)

 - {M} [library/Zend/Search/Lucene/Document/Html.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene%2FDocument%2FHtml.php&rev=23391)

********************************************

[r23394](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23394) 2010-11-19T15:28:15.052439Z / alexander

<pre>Zend_Pdf. Zend_Search_Lucene: fix file reading. Fixes [ZF-10697].
</pre>

 - {M} [library/Zend/Pdf/Parser.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FParser.php&rev=23394)

 - {M} [library/Zend/Pdf/Resource/Image/Png.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FResource%2FImage%2FPng.php&rev=23394)

 - {M} [library/Zend/Pdf/Resource/Image/Jpeg.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FPdf%2FResource%2FImage%2FJpeg.php&rev=23394)

 - {M} [library/Zend/Search/Lucene/Storage/File/Filesystem.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene%2FStorage%2FFile%2FFilesystem.php&rev=23394)

********************************************

[r23906](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23906) 2011-04-30T16:33:16.693250Z / adamlundrigan

<pre>ZF-11157
Split two instructions on same line onto separate lines
</pre>

 - {M} [library/Zend/Search/Lucene/Storage/Directory/Filesystem.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene%2FStorage%2FDirectory%2FFilesystem.php&rev=23906)

********************************************

[r24143](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24143) 2011-06-14T22:04:45.373099Z / adamlundrigan

<pre>ZF-11482
Zend_Search
Typo in exception message in Zend_Search_Lucene_Document_Html
</pre>

 - {M} [library/Zend/Search/Lucene/Document/Html.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene%2FDocument%2FHtml.php&rev=24143)

********************************************

[r24832](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24832) 2012-05-30T13:14:44.464950Z / adamlundrigan

<pre>ZF-3683: Performance improvement: reuse token object in lowercase filter
</pre>

 - {M} [library/Zend/Search/Lucene/Analysis/Token.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene%2FAnalysis%2FToken.php&rev=24832)

 - {M} [library/Zend/Search/Lucene/Analysis/TokenFilter/LowerCaseUtf8.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene%2FAnalysis%2FTokenFilter%2FLowerCaseUtf8.php&rev=24832)

 - {M} [library/Zend/Search/Lucene/Analysis/TokenFilter/LowerCase.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene%2FAnalysis%2FTokenFilter%2FLowerCase.php&rev=24832)

********************************************

[r24847](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24847) 2012-05-31T19:19:28.604526Z / rob

<pre>Fix ZF-12193: "Constant already defined" notice emitted from Zend_Service_Lucene.
</pre>

 - {M} [library/Zend/Search/Lucene/Analysis/Analyzer/Common.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSearch%2FLucene%2FAnalysis%2FAnalyzer%2FCommon.php&rev=24847)

********************************************

##Serializer
[r24815](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24815) 2012-05-24T08:50:24.532610Z / mabe

<pre>ZF-12231: fixed use of undefined variable $bin
</pre>

 - {M} [library/Zend/Serializer/Adapter/PythonPickle.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSerializer%2FAdapter%2FPythonPickle.php&rev=24815)

********************************************

##Server
[r23182](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23182) 2010-10-20T18:10:41.214469Z / ralph

<pre>ZF-10583
- Minor enhancement to exception message in Zend_Server_Reflection_Function_Abstract (c/o ~ramsey)
</pre>

 - {M} [library/Zend/Server/Reflection/Function/Abstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FServer%2FReflection%2FFunction%2FAbstract.php&rev=23182)

********************************************

[r23315](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23315) 2010-11-10T16:36:46.060138Z / matthew

<pre>ZF-10365: report Unknown[] for parameters type-hinted as arrays
- Auto-detect array typehints during reflection
- In the Introspector, if a parameter is given an "array" typehint, return it as
"Unknown[]"
</pre>

 - {A} [tests/Zend/Amf/Adobe/TestAsset](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FAmf%2FAdobe%2FTestAsset&rev=23315)

 - {M} [tests/Zend/Amf/Adobe/IntrospectorTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FAmf%2FAdobe%2FIntrospectorTest.php&rev=23315)

 - {M} [library/Zend/Amf/Adobe/Introspector.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FAmf%2FAdobe%2FIntrospector.php&rev=23315)

 - {M} [library/Zend/Server/Reflection/Function/Abstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FServer%2FReflection%2FFunction%2FAbstract.php&rev=23315)

 - {A} [tests/Zend/Amf/Adobe/TestAsset/ParameterHints.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FAmf%2FAdobe%2FTestAsset%2FParameterHints.php&rev=23315)

********************************************

[r23317](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23317) 2010-11-11T07:44:24.356792Z / bate

<pre>ZF-8566: fixed bug while parsing function parameter
</pre>

 - {M} [library/Zend/Server/Reflection/Function/Abstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FServer%2FReflection%2FFunction%2FAbstract.php&rev=23317)

********************************************

[r23319](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23319) 2010-11-12T21:53:32.608010Z / alexander

<pre>Zend_Server: fix @params recognition dockblock parsing regexp minor error.
</pre>

 - {M} [library/Zend/Server/Reflection/Function/Abstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FServer%2FReflection%2FFunction%2FAbstract.php&rev=23319)

********************************************

##Soap
[r24718](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24718) 2012-04-26T17:05:28.820082Z / ezimuel

<pre>ZF-6351: added the proxy class to manage document-literal SOAP
</pre>

 - {M} [tests/Zend/Soap/ServerTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FSoap%2FServerTest.php&rev=24718)

 - {M} [library/Zend/Soap/Server.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSoap%2FServer.php&rev=24718)

 - {A} [library/Zend/Soap/Server/Proxy.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSoap%2FServer%2FProxy.php&rev=24718)

********************************************

[r24744](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24744) 2012-05-02T11:36:26.983312Z / ezimuel

<pre>fixed Proxy Soap class
</pre>

 - {M} [tests/Zend/Soap/ServerTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FSoap%2FServerTest.php&rev=24744)

 - {M} [library/Zend/Soap/Server.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSoap%2FServer.php&rev=24744)

 - {M} [library/Zend/Soap/Server/Proxy.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSoap%2FServer%2FProxy.php&rev=24744)

********************************************

[r24842](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24842) 2012-05-31T18:31:28.680851Z / rob

<pre>Fix ZF-4491: Support the new Microsoft URL Rewrite Module for IIS 7.0.
</pre>

 - {M} [tests/Zend/Soap/AutoDiscoverTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FSoap%2FAutoDiscoverTest.php&rev=24842)

 - {M} [tests/Zend/Controller/Request/HttpTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FController%2FRequest%2FHttpTest.php&rev=24842)

 - {M} [library/Zend/Soap/AutoDiscover.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSoap%2FAutoDiscover.php&rev=24842)

 - {M} [library/Zend/Controller/Request/Http.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FController%2FRequest%2FHttp.php&rev=24842)

 - {M} [library/Zend/Feed/Pubsubhubbub/CallbackAbstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FPubsubhubbub%2FCallbackAbstract.php&rev=24842)

 - {M} [library/Zend/OpenId.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FOpenId.php&rev=24842)

********************************************

##Tag
##Text
##TimeSync
##Uri
[r23901](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23901) 2011-04-30T05:47:46.648344Z / adamlundrigan

<pre>ZF-11188
Updated Zend_Uri_Http to accept IPv6 URIs as per RFC 2732
</pre>

 - {M} [tests/Zend/Uri/HttpTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FUri%2FHttpTest.php&rev=23901)

 - {M} [library/Zend/Uri/Http.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FUri%2FHttp.php&rev=23901)

********************************************

##Validate
[r24486](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24486) 2011-09-30T19:33:53.065465Z / hobodave

<pre>ZF-11784: User can now disable attempts to use "common" magic files
</pre>

 - {M} [tests/Zend/Validate/File/MimeTypeTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FValidate%2FFile%2FMimeTypeTest.php&rev=24486)

 - {M} [library/Zend/Validate/File/MimeType.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FValidate%2FFile%2FMimeType.php&rev=24486)

********************************************

[r24702](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24702) 2012-03-28T20:08:40.102530Z / rob

<pre>support application/x-zip in Zend_Validate_File_IsCompressed
</pre>

 - {M} [tests/Zend/Validate/File/IsCompressedTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FValidate%2FFile%2FIsCompressedTest.php&rev=24702)

 - {M} [library/Zend/Validate/File/IsCompressed.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FValidate%2FFile%2FIsCompressed.php&rev=24702)

********************************************

[r24807](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24807) 2012-05-15T12:10:42.144694Z / adamlundrigan

<pre>ZF-11906: Fix some array to string conversion errors for PHP 5.4 compatibility
</pre>

 - {M} [library/Zend/Config/Yaml.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FConfig%2FYaml.php&rev=24807)

 - {M} [library/Zend/Locale/Format.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FLocale%2FFormat.php&rev=24807)

 - {M} [library/Zend/Cache/Core.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FCache%2FCore.php&rev=24807)

 - {M} [library/Zend/Validate/Abstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FValidate%2FAbstract.php&rev=24807)

 - {M} [library/Zend/Json/Server/Response.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FJson%2FServer%2FResponse.php&rev=24807)

********************************************

##View
[r23080](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23080) 2010-10-11T17:38:21.032014Z / matthew

<pre>[1.11] Promote Zend_View_Helper_Gravatar to trunk
- Merged in Zend_View_Helper_Gravatar from incubator
- Updated document structure to make it valid
</pre>

 - {M} [documentation/manual/en/module_specs/Zend_View-Helpers.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmodule_specs%2FZend_View-Helpers.xml&rev=23080)

 - {A} [documentation/manual/en/module_specs/Zend_View-Helpers-Gravatar.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmodule_specs%2FZend_View-Helpers-Gravatar.xml&rev=23080)

 - {A} [tests/Zend/View/Helper/GravatarTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FGravatarTest.php&rev=23080)

 - {A} [library/Zend/View/Helper/Gravatar.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FGravatar.php&rev=23080)

 - {M} [tests/Zend/View/Helper/AllTests.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FAllTests.php&rev=23080)

********************************************

[r23402](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23402) 2010-11-19T19:16:46.204210Z / bittarman

<pre>ZF-10529: Removed empty ID attributes from submit elements
</pre>

 - {M} [tests/Zend/View/Helper/FormSubmitTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FFormSubmitTest.php&rev=23402)

 - {M} [library/Zend/View/Helper/FormSubmit.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FFormSubmit.php&rev=23402)

********************************************

[r23463](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23463) 2010-12-01T13:44:23.536568Z / ramon

<pre>[ZF-10759] Zend_View_Helper_UserAgent apply patch "denniswinter".
</pre>

 - {M} [library/Zend/View/Helper/UserAgent.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FUserAgent.php&rev=23463)

********************************************

[r23945](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=23945) 2011-05-02T22:49:02.606860Z / adamlundrigan

<pre>ZF-10791
Zend_Form
Zend_Form method setName() has no effect
</pre>

 - {M} [library/Zend/View/Helper/FormElement.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FFormElement.php&rev=23945)

 - {M} [library/Zend/View/Helper/HtmlElement.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FHtmlElement.php&rev=23945)

 - {M} [library/Zend/View/Helper/Form.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FForm.php&rev=23945)

 - {M} [library/Zend/View/Helper/Doctype.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FDoctype.php&rev=23945)

********************************************

[r24059](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24059) 2011-05-28T16:46:49.827560Z / adamlundrigan

<pre>ZF-4191
Zend_View
Zend_View_Helper_FormRadio generates improper id attributes for certain values
</pre>

 - {M} [tests/Zend/View/Helper/FormRadioTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FFormRadioTest.php&rev=24059)

 - {M} [library/Zend/View/Helper/FormRadio.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FFormRadio.php&rev=24059)

********************************************

[r24157](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24157) 2011-06-27T15:14:59.050121Z / ezimuel

<pre>ZF-8252
</pre>

 - {M} [tests/Zend/View/Helper/FormSelectTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FFormSelectTest.php&rev=24157)

 - {M} [library/Zend/View/Helper/FormSelect.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FFormSelect.php&rev=24157)

********************************************

[r24451](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24451) 2011-09-06T17:36:17.721787Z / padraic

<pre>ZF-9746: Adds support for the accesskey HTML attribute in Navigation links for Zend\Navigation
</pre>

 - {A} [tests/Zend/View/Helper/Navigation/_files/expected/menu/accesskey.html](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FNavigation%2F_files%2Fexpected%2Fmenu%2Faccesskey.html&rev=24451)

 - {M} [tests/Zend/Navigation/PageTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FNavigation%2FPageTest.php&rev=24451)

 - {M} [tests/Zend/View/Helper/Navigation/TestAbstract.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FNavigation%2FTestAbstract.php&rev=24451)

 - {M} [tests/Zend/View/Helper/Navigation/MenuTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FNavigation%2FMenuTest.php&rev=24451)

 - {M} [library/Zend/Navigation/Page.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FNavigation%2FPage.php&rev=24451)

 - {M} [library/Zend/View/Helper/Navigation/Menu.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FNavigation%2FMenu.php&rev=24451)

 - {M} [tests/Zend/View/Helper/Navigation/_files/navigation.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FNavigation%2F_files%2Fnavigation.xml&rev=24451)

********************************************

[r24750](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24750) 2012-05-05T01:24:21.906177Z / adamlundrigan

<pre>ZF-11477: Refactor form view helpers to use getClosingBracket
</pre>

 - {M} [library/Zend/View/Helper/FormCheckbox.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FFormCheckbox.php&rev=24750)

 - {M} [tests/Zend/View/Helper/FormRadioTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FFormRadioTest.php&rev=24750)

 - {M} [library/Zend/View/Helper/FormRadio.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FFormRadio.php&rev=24750)

 - {M} [library/Zend/View/Helper/FormFile.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FFormFile.php&rev=24750)

 - {M} [tests/Zend/View/Helper/FormImageTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FFormImageTest.php&rev=24750)

 - {M} [library/Zend/View/Helper/FormImage.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FFormImage.php&rev=24750)

 - {M} [library/Zend/View/Helper/FormPassword.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FFormPassword.php&rev=24750)

 - {M} [library/Zend/View/Helper/FormReset.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FFormReset.php&rev=24750)

 - {M} [library/Zend/View/Helper/FormSubmit.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FFormSubmit.php&rev=24750)

 - {M} [library/Zend/View/Helper/FormText.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FFormText.php&rev=24750)

********************************************

[r24776](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24776) 2012-05-08T18:36:40.828336Z / adamlundrigan

<pre>ZF-11910: Zend_View_Helper_HeadMeta fatal error when no View object is set
</pre>

 - {M} [tests/Zend/View/Helper/HeadMetaTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FHeadMetaTest.php&rev=24776)

 - {M} [library/Zend/View/Helper/HeadMeta.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FHeadMeta.php&rev=24776)

********************************************

[r24814](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24814) 2012-05-22T16:55:35.440444Z / adamlundrigan

<pre>ZF-11811: Prevent duplicate attributes on <link> tag when using Zend_View_Helper_HeadLink
</pre>

 - {M} [tests/Zend/View/Helper/HeadLinkTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FHeadLinkTest.php&rev=24814)

 - {M} [library/Zend/View/Helper/HeadLink.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FHeadLink.php&rev=24814)

********************************************

[r24823](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24823) 2012-05-29T19:52:12.151613Z / rob

<pre>Fix ZF-11655: Zend_View_Helper_FormElement::getTranslator() has wrong return type documented. Patch by Frank Brückner
</pre>

 - {M} [library/Zend/View/Helper/FormElement.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FFormElement.php&rev=24823)

********************************************

[r24825](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24825) 2012-05-29T20:42:55.798776Z / rob

<pre>Fix ZF-6624: Improvement for Zend_View_Helper_FormCheckbox -> Make hidden field optional. Patch by Frank Brückner.
</pre>

 - {M} [library/Zend/View/Helper/FormCheckbox.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FFormCheckbox.php&rev=24825)

 - {M} [documentation/manual/en/module_specs/Zend_View-Helpers.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmodule_specs%2FZend_View-Helpers.xml&rev=24825)

 - {M} [tests/Zend/View/Helper/FormCheckboxTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FFormCheckboxTest.php&rev=24825)

********************************************

[r24829](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24829) 2012-05-30T12:31:39.952938Z / adamlundrigan

<pre>ZF-10977: Allow JSON action helper to accept pre-encoded JSON
</pre>

 - {M} [tests/Zend/Controller/Action/Helper/JsonTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FController%2FAction%2FHelper%2FJsonTest.php&rev=24829)

 - {M} [library/Zend/Controller/Action/Helper/Json.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FController%2FAction%2FHelper%2FJson.php&rev=24829)

 - {M} [documentation/manual/en/module_specs/Zend_View-Helpers-Json.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmodule_specs%2FZend_View-Helpers-Json.xml&rev=24829)

 - {M} [tests/Zend/View/Helper/JsonTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FJsonTest.php&rev=24829)

 - {M} [library/Zend/View/Helper/Json.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FJson.php&rev=24829)

********************************************

[r24839](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24839) 2012-05-31T11:59:28.682756Z / adamlundrigan

<pre>ZF-6941: Add "expand sibling branches" option to Zend_View_Helper_Navigation_Menu
</pre>

 - {M} [documentation/manual/en/module_specs/Zend_View-Helpers-Navigation.xml](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Fdocumentation%2Fmanual%2Fen%2Fmodule_specs%2FZend_View-Helpers-Navigation.xml&rev=24839)

 - {A} [tests/Zend/View/Helper/Navigation/_files/expected/menu/expandbranch.html](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FNavigation%2F_files%2Fexpected%2Fmenu%2Fexpandbranch.html&rev=24839)

 - {M} [tests/Zend/View/Helper/Navigation/MenuTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FNavigation%2FMenuTest.php&rev=24839)

 - {M} [library/Zend/View/Helper/Navigation/Menu.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FNavigation%2FMenu.php&rev=24839)

 - {A} [tests/Zend/View/Helper/Navigation/_files/expected/menu/expandbranch_onlyactivebranch.html](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FNavigation%2F_files%2Fexpected%2Fmenu%2Fexpandbranch_onlyactivebranch.html&rev=24839)

********************************************

[r24840](http://framework.zend.com/code/revision.php?repname=Zend+Framework&path=%2Ftrunk&rev=24840) 2012-05-31T14:15:01.738524Z / adamlundrigan

<pre>ZF-8709: Change label on radio button from explicit to implicit
</pre>

 - {M} [tests/Zend/View/Helper/FormRadioTest.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FView%2FHelper%2FFormRadioTest.php&rev=24840)

 - {M} [library/Zend/View/Helper/FormRadio.php](http://framework.zend.com/code/diff.php?repname=Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FView%2FHelper%2FFormRadio.php&rev=24840)

********************************************

##XmlRpc
