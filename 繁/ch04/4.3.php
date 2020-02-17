<HTML>
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></HEAD>
<BODY>
<?php
   $fee = 300;
  $serviceprice = 50;
  function totalfee(&$fee,$serviceprice){
         $fee = $fee+$serviceprice;
		 echo "需要支付的總價:$fee"."元。";
  }
  totalfee($fee,$serviceprice);
  totalfee($fee,$serviceprice);
?>
</BODY>
</HTML>
