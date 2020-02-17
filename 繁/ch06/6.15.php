<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><h2>用count函數統計陣列元素個數。</h2></HEAD>
<BODY>
<?php
  $prices_per_day = array('單床房'=> 298,'標准間'=> 268,'三床房'=> 198,'VIP套房'=> 368);
  $roomtypesinfo = array( array( 'type'=>'單床房',
                             'info'=>'此房間為單人單間。',
							 'price_per_day'=>298
                           ),
					  array( 'type'=>'標准間',
                             'info'=>'此房間為兩床標准組態。',
							 'price_per_day'=>268
                           ),
					  array( 'type'=>'三床房',
                             'info'=>'此房間備有三張床',
							 'price_per_day'=>198
                           ),
					  array( 'type'=>'VIP套房',
                             'info'=>'此房間為VIP兩間內外套房',
							 'price_per_day'=>368
                           )
                         );
  echo count($prices_per_day).'個元素在陣列$prices_per_day中。<br />';
  echo count($roomtypesinfo).'個內嵌陣列在二維陣列$roomtypesinfo中。<br />';
  echo count($roomtypesinfo,1).'個元素$roomtypesinfo中。<br />';
?>
</BODY>
</HTML>
