<HTML>
<HEAD>
    <TITLE></TITLE>
</HEAD>
<BODY>
<?php
$timestampfuture = @mktime(0,0,0,05,01,2012);
$timestampnow = @mktime();
$timecount = $timestampfuture - $timestampnow;
$days = round($timecount/86400);
echo "今天是".date('Y F d')." ,距離2012年5月1號的時間戳，還有".$days."天。";
?>
</BODY>
</HTML>
