  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><h2>GoodHome房間型態。</h2></HEAD>
<BODY>
<?php
  $roomtypes = array( '單床房','標准間','三床房','VIP套房');
  $prices_per_day = array('單床房'=> 298,'標准間'=> 268,'三床房'=> 198,'VIP套房'=> 368);
  sort($roomtypes);
  foreach ($roomtypes as $key => $value){
    echo $key.":".$value."<br />";
  }
  asort($prices_per_day);
  foreach ($prices_per_day as $key => $value){
    echo $key.":".$value." 每日。<br />";
  }
  ksort($prices_per_day);
  foreach ($prices_per_day as $key => $value){
    echo $key.":".$value." 每天。<br />";
  }
  rsort($roomtypes);
  foreach ($roomtypes as $key => $value){
    echo $key.":".$value."<br />";
  }
  arsort($prices_per_day);
  foreach ($prices_per_day as $key => $value){
    echo $key.":".$value." 每日。<br />";
  }
  krsort($prices_per_day);
  foreach ($prices_per_day as $key => $value){
    echo $key.":".$value." 每天。<br />";
  }
?>
</BODY>
</HTML>
