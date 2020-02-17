<html>
<head>
<title> </title>
</head>
<body>
<?php
 $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
 @$fp = fopen("$DOCUMENT_ROOT/booked.txt",'rb');
 if(!$fp){
    echo "沒有訂房訊息。";
  exit;
 }
 while (!feof($fp)){
    $order = fgets($fp, 2048);
  echo $order. "<br />";
 }
 fclose($fp);
?>
</body>
</html>
