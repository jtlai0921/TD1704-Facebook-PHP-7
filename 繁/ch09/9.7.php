<?php
//建立可拋出一個例外的函數
function checkNum($number)
 {
 if($number>1){
  throw new Exception("數值必須小於或等於1");
  }
 return true;
 }
//在 "try" 程式碼塊中觸發例外
try{
 checkNum(2);
 //若果沒有例外，則會顯示以下訊息
 echo '沒有任何例外';
 }
//捕捉例外
catch(Exception $e){
 echo '例外訊息: ' .$e->getMessage();
 }
?>
