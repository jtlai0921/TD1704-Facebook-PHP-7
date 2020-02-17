<html>
<head>
<title>error_log() 函數</title>
</head>
<body>
<?php
//定義錯誤函數
function customError($errno, $errstr){ 
echo "<b>錯誤:</b> [$errno] $errstr<br/>";
echo "錯誤記錄已經傳送完畢";
error_log("錯誤：[$errno] $errstr",1, "357975357@qq.com", "From: 12345678@qq.com ");
 }
//設定錯誤函數的處理
set_error_handler("customError",E_USER_WARNING);
// trigger_error函數
$test=5;
if ($test>4){
trigger_error("Value must be 4 or below",E_USER_WARNING);
}
?>
</body>
</html>
