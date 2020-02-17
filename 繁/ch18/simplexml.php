<?php
 $xmldoc = "<?xml version=\"1.0\" encoding=\"gb2312\"?>
   <store>
   <album catalog=\"song\">
     <name>天地一斗</name>
     <author>Jay</author>
     <heading>周傑倫專輯</heading>
     <body>這是jay的最新專輯</body>
	 <time>2011-02-20</time>
   </album>
   </store>";
  $simplexmlobj = new SimpleXMLElement($xmldoc);
  echo $simplexmlobj->asXML("storesim.xml");
?>
