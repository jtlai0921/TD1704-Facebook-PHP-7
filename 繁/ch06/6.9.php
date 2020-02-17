    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><h2>字串與陣列之間的轉換。</h2></HEAD>
<BODY>
<?php
  $prices_per_day = array('單床房'=> 298,'標准間'=> 268,'三床房'=> 198,'VIP套房'=> 368);
  echo implode('元每天/ ',$prices_per_day).'<br />';
  
  $roomtypes ='單床房,標准間,三床房,VIP套房';
   print_r(explode(',',$roomtypes));  
?>
</BODY>
</HTML>

