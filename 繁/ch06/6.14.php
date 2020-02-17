<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><h2>查詢一維陣列。</h2></HEAD>
<BODY>
<?php
  $roomtypes = array( '單床房','標准間','三床房','VIP套房');
  $prices_per_day = array('單床房'=> 298,'標准間'=> 268,'三床房'=> 198,'VIP套房'=> 368);

if(in_array( '單床房',$roomtypes)){echo '單床房元素在陣列$roomtypes中。<br />';}
if(array_key_exists( '單床房',$prices_per_day)){echo '鍵名為單床房的元素在陣列$prices_per_day中。<br />';}
if(array_search( 268,$prices_per_day)){echo '值為268的元素在陣列$prices_per_day中。<br />';}	

	$prices_per_day_keys = array_keys($prices_per_day);
	print_r($prices_per_day_keys);
	$prices_per_day_values = array_values($prices_per_day);
	print_r($prices_per_day_values);
?>
</BODY>
</HTML>
