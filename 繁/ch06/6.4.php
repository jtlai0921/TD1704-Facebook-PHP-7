  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><h2>GoodHome房間型態。</h2></HEAD>
<BODY>
<?php
  $roomtypes = array( '單床房','標准間','三床房','VIP套房');
  for ($i = 0; $i < 3; $i++){
     echo $roomtypes[$i]." （for循環）<br />";
  }
  foreach ($roomtypes as $room){
    echo $room."（foreach循環）<br />";
  }
?>
</BODY>
</HTML>
