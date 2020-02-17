<HTML>
<HEAD>
    <TITLE>陣列變數</TITLE>
</HEAD>
<BODY>
<?php
$arr=array
(
    0=>15,
    2=>1E+05,
    1=>"開始研讀PHP基本語法了",
);
for ($i=0;$i<count($arr);$i++)
{    
$arr1=each($arr);
echo "$arr1[value]<br>";
}
?>
</BODY>
<HTML>
