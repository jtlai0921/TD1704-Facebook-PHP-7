<HTML>
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></HEAD>
<BODY>
<?php
  function totalneedtopay($days,$roomprice){
         $totalcost = $days*$roomprice;
		 "需要支付的總價:$totalcost"."元。";
  }
  $rentdays = 3;
  $roomprice = 168;
  totalneedtopay($rentdays,$roomprice);
  totalneedtopay(5,198);
?>
</BODY>
</HTML>
