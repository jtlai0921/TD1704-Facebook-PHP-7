<HTML>
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></HEAD>
<BODY>
<?php
 function totalneedtopay($days,$roomprice){
         return $days*$roomprice;	
 }
  $rentdays = 3;
  $roomprice = 168;
  echo totalneedtopay($rentdays,$roomprice);
?>
</BODY>
</HTML>
