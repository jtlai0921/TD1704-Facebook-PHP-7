<?php
  $storeobj = simplexml_load_file("storeutf8.xml") ; 
  echo $storeobj->album->name ."<br />";
  print_r($storeobj);
?>
