<HTML>
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></HEAD>
<BODY>
<?php
   $someinput = "這個字串的長度不長。length is not long.";
   $length = strlen($someinput);
   if(strlen($someinput)>50){
       echo "輸入的字串的長度不能大於50個字元。";
   }else{
       echo "容許輸入字串的長度，此字串長度為$length";
   }
?>
</BODY>
</HTML>
