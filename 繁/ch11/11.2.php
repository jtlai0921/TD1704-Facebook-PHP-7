<html>
<head>
<title> </title>
</head>
<body>
<?php
 $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
 $customername = trim($_POST['customername']);
 $gender = $_POST['gender'];
 $arrivaltime = $_POST['arrivaltime'];
 $phone = trim($_POST['phone']);
 $email = trim($_POST['email']);
 
  if( $gender == "m"){
    $customer = "先生";
 }else{
    $customer = "女士";
 }
 
 $date = date("H:i:s Y m d");
 $string_to_be_added = $date."\t".$customername."\t".$customer." 將在 ".$arrivaltime." 天後到達\t 聯繫電話：".$phone."\t Email: ".$email ."\n";
 $fp = fopen("$DOCUMENT_ROOT/booked.txt",'ab');
 if(fwrite($fp, $string_to_be_added, strlen($string_to_be_added))){
      echo $customername."\t".$customer." ,您的訂房訊息已經儲存。我們會透過Email和電話和您聯繫。";
 }else{
      echo "訊息儲存出現錯誤。";
 }
 fclose($fp);
?>
</body>
</html>
