<?php
  $storeobj = simplexml_load_file("storeutf8.xml") ;
  $storeobj->addAttribute("storetype","CDshop");
  $storeobj->album->addChild("type","CD");
  echo $storeobj->album->name."<br />";
  $storeobj->asXML("storeutf8-2.xml");
?>
