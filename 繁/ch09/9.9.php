<html>
<head>
<title>處理多個例外</title>
</head>
<body>
<?php
class customException extends Exception{
public function errorMessage(){
//定義錯誤訊息
$errorMsg = '錯誤訊息的行：'.$this->getLine().' in '.$this->getFile()
.': <b>'.$this->getMessage().'</b> 不是一個有效的信箱位址';
return $errorMsg;
}
}
$email = "someone@yahoo.com";
try{
 //檢查是否符合條件
 if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
  {
  //若果信箱位址無效，則拋出例外
  throw new customException($email);
  }
 //檢查信箱是否是雅虎信箱
 if(strpos($email, "yahoo") !== FALSE){
  throw new Exception("$email 是一個雅虎信箱");
  }
 }
catch (customException $e) {
 echo $e->errorMessage();
 }
catch(Exception $e) {
 echo $e->getMessage();
 }
?>
</body>
</html>
