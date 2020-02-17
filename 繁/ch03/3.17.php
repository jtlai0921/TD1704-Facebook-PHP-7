<HTML>
<HEAD>
    <TITLE>二維陣列</TITLE>
</HEAD>
<BODY>
<?php
$arr[0][0]=10;
$arr[0][1]=22;
$arr[1] [0]= 1E+05;
$arr[1] [1]= "開始研讀PHP基本語法了";
for ($i=0;$i<count($arr);$i++)
{    
   for ($k=0;$k<count($arr[$i]);$k++)
{   
$arr1=each($arr[$i]);
echo "$arr1[value]<br>";
}
}
?>
</BODY>
<HTML>
