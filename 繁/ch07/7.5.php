<HTML>
<HEAD>
    <TITLE>輸出格式化日期和時間</TITLE>
</HEAD>
<BODY>
<?php date_default_timezone_set("PRC"); 
echo(strftime("%b %d %Y %X", mktime(20,0,0,12,31,98)));
echo(gmstrftime("%b %d %Y %X", mktime(20,0,0,12,31,98)));
//輸出目前日期、時間和時區
echo(gmstrftime("It is %a on %b %d, %Y, %X time zone: %Z",time()));
?>
</BODY>
</HTML>
