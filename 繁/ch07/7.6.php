<HTML>
<HEAD>
    <TITLE>顯示本機化日期和時間</TITLE>
</HEAD>
<BODY>
<?php date_default_timezone_set("PRC"); 
date_default_timezone_set("Asia/Hong_Kong");
setlocale(LC_TIME, "zh_CN.gb2312");
echo strftime("%z");
?>
</BODY>
</HTML>
