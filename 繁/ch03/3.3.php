<HTML>
<HEAD>
    <TITLE>系統變數</TITLE>
</HEAD>
<BODY>
<?php
  $value0 = "guest";
  $$value0 = "customer";
  echo $guest."<br />";
  $guest = "feifei";
  echo $guest."\t".$$value0."<br />";

  $value1 = "xiaoming";
  $value2 = &$value1;
  echo $value1."\t".$value2."<br />";  
  $value2 = "lili";
  echo $value1."\t".$value2; 
?>
</BODY>
<HTML>
