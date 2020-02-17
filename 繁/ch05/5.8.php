<HTML>
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></HEAD>
<BODY>
<?php
   $someinput = "create a substring of this string.";
   $someinput2 = "建立一個這個字串的子字串。";
   echo substr($someinput,0,11)."<br />";
   echo substr($someinput,1,15)."<br />";
   echo substr($someinput,0,-2)."<br />";
   echo substr($someinput2,0,12)."<br />";
   echo substr($someinput2,0,10)."<br />";
   echo substr($someinput2,0,11);
?>
</BODY>
</HTML>
