<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><h2>用array_flip函數調換陣列內鍵值和元素值。</h2></HEAD>
<BODY>
<?php
  $prices_per_day = array('單床房'=> 298,'標准間'=> 268,'三床房'=> 198,'四床房'=> 198,'VIP套房'=> 368);	
  print_r(array_flip ($prices_per_day));
?>
</BODY>
</HTML>
