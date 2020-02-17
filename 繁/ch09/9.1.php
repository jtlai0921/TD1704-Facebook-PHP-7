<html>
<head>
<title> DIE敘述除錯</title>
</head>
<body>
<?php
if(!file_exists("welcome.txt")){
die("檔案不存在");
 }
else{
 $file=fopen("welcome.txt","r");
 } 
?>
</body>
</html>
