<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><h2>GoodHome房間型態（多維陣列）。</h2></HEAD>
<BODY>
<?php
  $roomtypes = array( array( 'type'=>'單床房',
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
  for ($row = 0; $row < 4; $row++){
    while (list($key, $value ) = each( $roomtypes[$row])){
        echo "$key:$value"."\t |";
  }    
    echo '<br />';
  }
?>
</BODY>
</HTML>
