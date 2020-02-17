<?php
  session_start();
  unset($_SESSION['name']);
  if (isset($_SESSION['name'])){
     echo "階段變數為:".$_SESSION['name'];
  }else{
     echo "階段變數已登出。";
  }
  session_destroy();
?>
