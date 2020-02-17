  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><h2>GoodHome房間型態。</h2></HEAD>
<BODY>
<?php
  $prices_per_day = array('單床房'=> 298,'標准間'=> 268,'三床房'=> 198,'VIP套房'=> 368);
  foreach ($prices_per_day as $price){
    echo $price."<br />";
  }
  foreach ($prices_per_day as $key => $value){
    echo $key.":".$value." 每天。<br />";
  } 
  reset($prices_per_day);
  while ($element = each($prices_per_day)){
    echo $element['key']."\t";
  echo $element['value'];
  echo "<br />";
  }
  reset($prices_per_day);
  while (list($type, $price) = each($prices_per_day)){
  echo "$type - $price<br />";
  }
?>
</BODY>
</HTML>
