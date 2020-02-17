<HTML>
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></HEAD>
<BODY>
<?php
   $someinput = " 這個字串的空格有待處理。 ";
   echo "Output:".ltrim($someinput)."End <br />";
   echo "Output:".rtrim($someinput)."End <br />";
   echo "Output:".trim($someinput)."End <br />";
   $someinput2 = " 這個字串 的 空格有待處理。 ";
   echo "Output:".trim($someinput2)."End";
?>
</BODY>
</HTML>
