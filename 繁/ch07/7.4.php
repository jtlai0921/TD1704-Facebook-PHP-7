<HTML>
<HEAD>
    <TITLE>檢查日期的有效性</TITLE>
</HEAD>
<BODY>
<?php
if(checkdate(2,31,2012)){
   echo "這不可能。";
}else{
   echo "2月沒有31號。";
}
?>
</BODY>
</HTML>
