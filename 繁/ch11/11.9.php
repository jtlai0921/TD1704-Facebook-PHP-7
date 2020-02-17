<html>
<head>
<title> </title>
</head>
<body>
<?php
// 注意在 4.0.0-RC2 之前不存在 !== 運算符
if ($handle = opendir('d:/ch12')) {
    echo "Directory handle: $handle\n";
    echo "Files:\n";
    /* 這是正確地檢查目錄方法 */
    while (false !== ($file = readdir($handle))) {
        echo "$file\n";
    }
    closedir($handle);
}
?>
</body>
</html>
