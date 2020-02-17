<html>
<head>
<title> 將目錄轉為物件</title>
</head>
<body>
<?php
$d2 = dir("d:/ch11");
echo "Handle: ".$d2->handle."<br>\n";
echo "Path: ".$d2->path."<br>\n";
while (false !== ($entry = $d2->read())) {
    echo $entry."<br>\n";
}
$d2->close();
?>
</body>
</html>
