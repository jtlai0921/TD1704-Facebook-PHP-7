<HTML>
<HEAD>
    <TITLE>靜態變數</TITLE>
</HEAD>
<BODY>
<?php
   $person = 20;
  function showpeople(){
      static $person = 5;
    $person++;
      echo '再增加一位, 將會有 '.$person.' 為 static 人員。<br />';
  }
  showpeople();
  echo $person.' 人員。<br />';
  showpeople();
?>
</BODY>
<HTML>
