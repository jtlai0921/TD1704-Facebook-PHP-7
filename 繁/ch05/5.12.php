<HTML>
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></HEAD>
<BODY>
<?php
$searchurl = "這是搜尋引擎連線：http://www.google.com/和http://www.baidu.com/。";
echo @ereg_replace("(http://)([a-zA-Z0-9./-_]+)","<a href=\"\\0\">\\0</a>",$searchurl);
echo "<br />";
echo @ereg_replace("(http://)([a-zA-Z0-9./-_]+)","<a href=\"\\0\">\\2</a>",$searchurl);
?>
</BODY>
</HTML>
