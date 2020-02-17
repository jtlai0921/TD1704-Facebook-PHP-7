<?php
  session_start();
  echo "階段變數為:".$_SESSION['name']."<br />";
  echo $_SESSION['name'].",你好。";
?>
<a href='closesession.php'>下一頁</a>
