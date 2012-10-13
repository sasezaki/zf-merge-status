[r23071](http://framework.zend.com/code/revision.php?repname=zf.Zend+Framework&path=%2Ftrunk&rev=23071) 2010-10-10T18:19:33.005702Z / padraic

<pre>Made it explicit to use url encoding on raw data in requests - more precautionary than anything needing fixing.
</pre>

 - {M} [library/Zend/Feed/Pubsubhubbub/Subscriber.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FPubsubhubbub%2FSubscriber.php&rev=23071)

********************************************

[r23075](http://framework.zend.com/code/revision.php?repname=zf.Zend+Framework&path=%2Ftrunk&rev=23075) 2010-10-10T21:31:30.287720Z / padraic

<pre>Updated client request to set urlencoded for raw data in Zend_Feed_Pubsubhubbub_Publisher
</pre>

 - {M} [library/Zend/Feed/Pubsubhubbub/Publisher.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FPubsubhubbub%2FPublisher.php&rev=23075)

********************************************

[r23077](http://framework.zend.com/code/revision.php?repname=zf.Zend+Framework&path=%2Ftrunk&rev=23077) 2010-10-10T23:06:49.491992Z / padraic

<pre>Ensure slash element is omitted when comment count is a boolean false - fixes ZF-10054
</pre>

 - {M} [library/Zend/Feed/Writer/Extension/Slash/Renderer/Entry.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FWriter%2FExtension%2FSlash%2FRenderer%2FEntry.php&rev=23077)

********************************************

[r23090](http://framework.zend.com/code/revision.php?repname=zf.Zend+Framework&path=%2Ftrunk&rev=23090) 2010-10-12T17:28:16.110912Z / padraic

<pre>Added support for Atom 1.0 icons to Zend_Feed_Reader/Writer
</pre>

 - {M} [tests/Zend/Feed/Reader/Feed/AtomTest.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2FAtomTest.php&rev=23090)

 - {M} [tests/Zend/Feed/Writer/Renderer/Feed/AtomTest.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FWriter%2FRenderer%2FFeed%2FAtomTest.php&rev=23090)

 - {M} [library/Zend/Feed/Writer/Renderer/Feed/Atom.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FWriter%2FRenderer%2FFeed%2FAtom.php&rev=23090)

 - {M} [library/Zend/Feed/Writer/Feed/FeedAbstract.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FWriter%2FFeed%2FFeedAbstract.php&rev=23090)

 - {A} [tests/Zend/Feed/Reader/Feed/_files/Atom/icon](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2F_files%2FAtom%2Ficon&rev=23090)

 - {A} [tests/Zend/Feed/Reader/Feed/_files/Atom/icon/plain/none](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2F_files%2FAtom%2Ficon%2Fplain%2Fnone&rev=23090)

 - {A} [tests/Zend/Feed/Reader/Feed/_files/Atom/icon/plain/none/atom10.xml](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2F_files%2FAtom%2Ficon%2Fplain%2Fnone%2Fatom10.xml&rev=23090)

 - {M} [library/Zend/Feed/Writer/Renderer/Feed/Atom/AtomAbstract.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FWriter%2FRenderer%2FFeed%2FAtom%2FAtomAbstract.php&rev=23090)

 - {A} [tests/Zend/Feed/Reader/Feed/_files/Atom/icon/plain](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2F_files%2FAtom%2Ficon%2Fplain&rev=23090)

 - {A} [tests/Zend/Feed/Reader/Feed/_files/Atom/icon/plain/atom10.xml](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2F_files%2FAtom%2Ficon%2Fplain%2Fatom10.xml&rev=23090)

 - {A} [tests/Zend/Feed/Reader/Feed/_files/Atom/icon/plain/none/atom03.xml](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2F_files%2FAtom%2Ficon%2Fplain%2Fnone%2Fatom03.xml&rev=23090)

 - {A} [tests/Zend/Feed/Reader/Feed/_files/Atom/icon/plain/atom03.xml](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2FFeed%2F_files%2FAtom%2Ficon%2Fplain%2Fatom03.xml&rev=23090)

 - {M} [tests/Zend/Feed/Writer/FeedTest.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FWriter%2FFeedTest.php&rev=23090)

 - {M} [library/Zend/Feed/Reader/Extension/Atom/Feed.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FReader%2FExtension%2FAtom%2FFeed.php&rev=23090)

********************************************

[r23902](http://framework.zend.com/code/revision.php?repname=zf.Zend+Framework&path=%2Ftrunk&rev=23902) 2011-04-30T06:37:26.231910Z / adamlundrigan

<pre>ZF-11184
Updated Zend_Feed_Reader::import to throw exception on empty response body before calling self::importString
</pre>

 - {M} [tests/Zend/Feed/ReaderTest.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReaderTest.php&rev=23902)

 - {M} [library/Zend/Feed/Reader.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FReader.php&rev=23902)

********************************************

[r23909](http://framework.zend.com/code/revision.php?repname=zf.Zend+Framework&path=%2Ftrunk&rev=23909) 2011-04-30T18:27:35.999622Z / adamlundrigan

<pre>ZF-11150
Zend_Feed
Fixed setCommentCount to accept zero as valid quantity of comments
</pre>

 - {M} [library/Zend/Feed/Writer/Entry.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FWriter%2FEntry.php&rev=23909)

 - {M} [tests/Zend/Feed/Writer/EntryTest.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FWriter%2FEntryTest.php&rev=23909)

********************************************

[r24436](http://framework.zend.com/code/revision.php?repname=zf.Zend+Framework&path=%2Ftrunk&rev=24436) 2011-09-03T19:27:21.747396Z / ramon

<pre>[ZF-11554] DOCUMENTATION
- Fix typo docblock.
</pre>

 - {M} [library/Zend/Feed/Writer/Extension/RendererAbstract.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FWriter%2FExtension%2FRendererAbstract.php&rev=24436)

********************************************

[r24710](http://framework.zend.com/code/revision.php?repname=zf.Zend+Framework&path=%2Ftrunk&rev=24710) 2012-04-16T18:55:12.000443Z / bittarman

<pre>Fixes ZF-12156, removed f before opening php tag
</pre>

 - {M} [library/Zend/Feed/Writer/Deleted.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FWriter%2FDeleted.php&rev=24710)

********************************************

[r24842](http://framework.zend.com/code/revision.php?repname=zf.Zend+Framework&path=%2Ftrunk&rev=24842) 2012-05-31T18:31:28.680851Z / rob

<pre>Fix ZF-4491: Support the new Microsoft URL Rewrite Module for IIS 7.0.
</pre>

 - {M} [library/Zend/Soap/AutoDiscover.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSoap%2FAutoDiscover.php&rev=24842)

 - {M} [library/Zend/Controller/Request/Http.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FController%2FRequest%2FHttp.php&rev=24842)

 - {M} [library/Zend/Feed/Pubsubhubbub/CallbackAbstract.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FPubsubhubbub%2FCallbackAbstract.php&rev=24842)

 - {M} [library/Zend/OpenId.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FOpenId.php&rev=24842)

 - {M} [tests/Zend/Soap/AutoDiscoverTest.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FSoap%2FAutoDiscoverTest.php&rev=24842)

 - {M} [tests/Zend/Controller/Request/HttpTest.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FController%2FRequest%2FHttpTest.php&rev=24842)

********************************************

[r25031](http://framework.zend.com/code/revision.php?repname=zf.Zend+Framework&path=%2Ftrunk&rev=25031) 2012-08-17T19:42:00.056268Z / matthew

<pre>Fixes for potential XXE/XEE vulnerabilities
- Patch provided by Padriac Brady, reviewed by Ralph Schindler and Matthew Weier
O'Phinney
</pre>

 - {A} [tests/Zend/Feed/Reader/_files/Reader/xxe-atom10.xml](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2F_files%2FReader%2Fxxe-atom10.xml&rev=25031)

 - {M} [tests/Zend/Dom/QueryTest.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FDom%2FQueryTest.php&rev=25031)

 - {M} [library/Zend/Dom/Query.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FDom%2FQuery.php&rev=25031)

 - {A} [tests/Zend/Soap/TestAsset](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FSoap%2FTestAsset&rev=25031)

 - {M} [tests/Zend/XmlRpc/RequestTest.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FXmlRpc%2FRequestTest.php&rev=25031)

 - {A} [tests/Zend/Feed/Reader/_files/Reader/xxe-info.txt](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReader%2F_files%2FReader%2Fxxe-info.txt&rev=25031)

 - {A} [tests/Zend/Soap/TestAsset/commontypes.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FSoap%2FTestAsset%2Fcommontypes.php&rev=25031)

 - {M} [library/Zend/XmlRpc/Request.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FXmlRpc%2FRequest.php&rev=25031)

 - {M} [tests/Zend/Serializer/Adapter/WddxTest.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FSerializer%2FAdapter%2FWddxTest.php&rev=25031)

 - {M} [library/Zend/Serializer/Adapter/Wddx.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSerializer%2FAdapter%2FWddx.php&rev=25031)

 - {M} [tests/Zend/XmlRpc/ResponseTest.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FXmlRpc%2FResponseTest.php&rev=25031)

 - {M} [library/Zend/XmlRpc/Response.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FXmlRpc%2FResponse.php&rev=25031)

 - {M} [tests/Zend/Feed/ReaderTest.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FFeed%2FReaderTest.php&rev=25031)

 - {M} [library/Zend/Feed/Reader.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FFeed%2FReader.php&rev=25031)

 - {M} [tests/Zend/Soap/ServerTest.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Ftests%2FZend%2FSoap%2FServerTest.php&rev=25031)

 - {M} [library/Zend/Soap/Server.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSoap%2FServer.php&rev=25031)

 - {M} [library/Zend/Soap/Client/Local.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSoap%2FClient%2FLocal.php&rev=25031)

 - {M} [library/Zend/Soap/Wsdl.php](http://framework.zend.com/code/diff.php?repname=zf.Zend+Framework&path=%2Ftrunk%2Flibrary%2FZend%2FSoap%2FWsdl.php&rev=25031)

********************************************

