<HTML>
<HEAD>
    <TITLE>變數的型態</TITLE>
</HEAD>
<BODY>
<?php
   $int1= 2012;
   $int2= 01223;    //八進位整數
   $int3=0x1223;   //十六進位整數
   echo "輸出整數型態的值：";
   echo $int1;
   echo "\t";   //輸出一個制表符
   echo $int2;   //輸出659
   echo "\t";
   echo $int3;   //輸出4643
   echo "<br>";
   $float1=1E+04;
   echo $float1;   //輸出10000
   echo "<br>";
   echo "輸出布爾型變數：";
   echo (Boolean)( $int1);    //將int1整數轉化為布爾變數
   echo "<br>";
   $string1="字串型態的變數";
   echo $string1;
?>
</BODY>
<HTML>
