<html>
<body>
<?php
if (isset($_COOKIE["user"]))                             //假如Cookie檔案存在
  echo "Welcome " . $_COOKIE["user"] . "!<br />";
else                                                 //若果Cookie檔案不存在
  echo "Welcome guest!<br />"; 
?>
</body>
