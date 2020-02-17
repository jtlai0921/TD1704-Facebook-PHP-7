<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />您的訂房訊息：</HEAD>
<BODY>
<?php
 $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
 $customername = trim($_POST['customername']);
 $gender = $_POST['gender'];
 $arrivaltime = $_POST['arrivaltime'];
 $phone = trim($_POST['phone']);
 $email = trim($_POST['email']);
 $info = trim($_POST['info']);
 if(!@eregi('^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9_\-\.]+$',$email)){
     echo "這不是一個有效的email位址, 請傳回上頁且重試";
   exit;
 }
 if(!@eregi('^[0-9]$',$phone) and strlen($phone)<= 4 or strlen($phone)>= 15){
     echo "這不是一個有效的電話號碼, 請傳回上頁且重試";
   exit;
 }
 if( $gender == "m"){
    $customer = "先生";
 }else{
    $customer = "女士";
 }
 echo '<p>您的訂房訊息已經上傳，我們正在為您準備房間。 確認您的訂房訊息如下:</p>';
 echo $customername."\t".$customer.' 將會在 '.$arrivaltime.' 天後到達。 您的電話為'.$phone."。我們將會傳送一封電子信件到您的email信箱：".$email."。<br /><br />另外，我們已經確認了您其他的要求如下：<br /><br />";
 echo nl2br($info);
 echo "<p>您的訂房時間為:".date('Y m d H：i：s')."</p>";
?>
</BODY>
</HTML>
