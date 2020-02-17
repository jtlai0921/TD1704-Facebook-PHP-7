<?php
session_start();
// 儲存階段變數的值
$_SESSION['views']=1;
?>
<html>
<body>
<?php
//讀取階段變數的值
echo "瀏覽量=". $_SESSION['views'];
?>
</body>
</html>
