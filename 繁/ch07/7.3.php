<HTML>
<HEAD>
    <TITLE>取得目前時間戳</TITLE>
</HEAD>
<BODY>
<?php date_default_timezone_set("PRC"); 
  //定義一個時間的變數
  $tm ="2012-08-08 08:08:08";
  echo "時間為：". $tm. "<br>";
//將格式轉化為Unix時間戳
  $tp =strtotime($tm);
  echo "此時間的Unix時間戳為：".$tp. "<br>";
  $ar1 =getdate($tp);
  echo "年為：". $ar1["year"]."<br>";
  echo "月為：". $ar1["mon"]."<br>";
  echo "日為：". $ar1["mday"]."<br>";
  echo "點為：". $ar1["hours"]."<br>";
  echo "分為：". $ar1["minutes"]."<br>";
  echo "秒為：". $ar1["seconds"]."<br>";
?>
</BODY>
</HTML>
