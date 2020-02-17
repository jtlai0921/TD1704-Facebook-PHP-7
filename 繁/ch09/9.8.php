<html>
<head>
<title>自訂例外處理器</title>
</head>
<body>
<?php
class customException extends Exception{
 public function errorMessage(){
  //錯誤訊息
  $errorMsg = '例外發生的行： '.$this->getLine().' in '.$this->getFile()
  .': <b>'.$this->getMessage().'</b>不是一個有效的信箱位址';
  return $errorMsg;
  }
 }
$email = "someone@example.321com";
try
 {
 //檢查是否符合條件 
 if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)  {
  //如何信件位址無效，則拋出例外
  throw new customException($email);
  }
 }
catch (customException $e){
 //顯示自訂的訊息
 echo $e->errorMessage();
 }
?>
</body>
</html>

