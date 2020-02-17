<html>
<head>
<title> </title>
</head>
<body>
<?php
$dir = "d:/ch12/";
// 開啟一個目錄，然後讀取目錄中的內容
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            print "filename: $file : filetype: " . filetype($dir . $file) . "\n";
        }
        closedir($dh);
    }
}
?>
</body>
</html>
