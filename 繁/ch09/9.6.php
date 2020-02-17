<html>
<head>
<title>例外</title>
</head>
<body>
<?php
//建立帶有例外的函數
function checkNum($number){
 if($number>1){
   throw new Exception("Value must be 1 or below");
  }
 return true;
 }
//拋出例外
checkNum(2);
?>
</body>
</html>
