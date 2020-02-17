<HTML>
<HEAD>
    <TITLE>取得目前時間戳</TITLE>
</HEAD>
<BODY>
<?php date_default_timezone_set("PRC"); 
  //定義一個目前時間的變數
  $tt =time();
  echo "目前的時間為：<br>";
//使用不同的格式化字元測試輸出效果
echo date ("Y年m月d日[l]H點i分s秒",$tt)."<br>";
  echo date ("y-m-d h:i:s a",$tt)."<br>";
  echo date ("Y-M-D H:I:S A",$tt)."<br>";
  echo date ("F,d,y l",$tt)." <br>";
  echo date ("Y-M-D H:I:S",$tt)." <br>";
?>
</BODY>
</HTML>
