<HTML>
<HEAD>
    <TITLE> </TITLE>
</HEAD>
<BODY>
<?php
  $room = 20;
  function showrooms(){
      $room = $GLOBALS['room'];
      echo $room.'間新房間。<br />';
  }
  showrooms();
  echo $room.'間房間。';
?>
</BODY>
<HTML>
