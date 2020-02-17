<HTML>
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></HEAD>
<BODY>
<?php
   $someinput = "How_to_split_this_sentance.";
   $someinput2 = "把 這個句子 按空格 分割。";
   $a = explode('_',$someinput);
   print_r($a);
   $b = explode(' ',$someinput2);
   print_r($b);
   echo implode('>',$a)."<br />";
   echo implode('*',$b);
?>
</BODY>
</HTML>
