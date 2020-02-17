<html>
<head>
<title> 自訂錯誤</title>
</head>
<body>
<?php
//定義錯誤函數
function customError($errno, $errstr){ 
 echo "<b>錯誤:</b> [$errno] $errstr";
 }
//設定錯誤函數的處理
set_error_handler("customError");
//觸發自訂錯誤函數
echo($test);
?>
</body>
</html>
