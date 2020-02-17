<HTML>
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></HEAD>
<BODY>
<?php
   $someinput = "I have a Dream that to find a string with a dream.";
   $someinput2 = "我有一個夢想，能夠找到理想。";
   echo strstr($someinput,"dream")."<br />";
   echo stristr($someinput,"dream")."<br />";
   echo strstr($someinput,"that")."<br />";
   echo strstr($someinput2,"夢想")."<br />";
?>
</BODY>
</HTML>
