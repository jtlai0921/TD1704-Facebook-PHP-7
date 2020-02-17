<HTML>
<HEAD>
    <TITLE></TITLE>
</HEAD>
<BODY>
<?php
$timestampA = mktime(0,0,0,3,31,2012);
$timestampB = mktime(0,0,0,1,31,2012);
if($timestampA > $timestampB ){
   echo "2012年三月的時間戳數值大於2012年一月的。";
}elseif( $timestampA < $timestampB ){
   echo "2012年三月的時間戳數值小於2012年一月的。";
}else{
       echo "兩個時間相同。";
}
?>
</BODY>
</HTML>
