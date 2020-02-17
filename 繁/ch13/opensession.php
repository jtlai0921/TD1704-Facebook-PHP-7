<?php
  session_start();
  $_SESSION['name'] = "王小明";
   echo "階段變數為:".$_SESSION['name'];
?>
<a href='usesession.php'>下一頁</a>
