<html>
<head>
<title> 取得目前工作目錄中的檔案和目錄</title>
</head>
<body>
<?php
$dir='d:/ch11';   //定義特殊的目錄
$files1 = scandir($dir);  //列出指定目錄中檔案和目錄
$files2 = scandir($dir, 1);
print_r($files1);   //輸出指定目錄中檔案和目錄
print_r($files2);
?>
</body>
</html>
