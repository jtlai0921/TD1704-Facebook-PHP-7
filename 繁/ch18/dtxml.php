<?php
$dom = new DomDocument('1.0','gb2312');              //建立DOM物件
$store = $dom->createElement('store');                 //建立根節點store
$dom->appendChild($store);                         //將建立的根節點新增到DOM物件中
$album = $dom->createElement('album');               //建立節點album
$store ->appendChild($album);                       //將節點album追加到DOM物件中
$musiccd = $dom->createElement('musiccd');           //建立節點musiccd
$album ->appendChild($musiccd);                   //將musiccd追加到DOM物件中
$type = $dom->createAttribute('type');                  //建立節點屬性type
$musiccd->appendChild($type);                  //將屬性追加到musiccd元素後
$type_value = $dom->createTextNode('music');           //建立一個屬性值
$type->appendChild($type_value);                     //將屬性值賦給type
$name = $dom->createElement('name');                 //建立節點name
$musiccd ->appendChild($name);                     //將節點追加到DOM物件中
$name_value = $dom->createTextNode(iconv('gb2312','utf-8','周傑倫專輯')); //建立元素值
$name->appendChild($name_value);                   //將值賦給節點name
echo $dom->saveXML();                            //輸出XML檔案
?>
