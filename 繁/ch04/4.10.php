<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>switch敘述的使用</title>
</head>
<body>
<?php
$x=5;
switch ($x)
{
case 1:
  echo "數值為 1";
  break;
case 2:
  echo "數值為2";
  break;
case 3:
  echo "數值為3";
  break;
case 4:
  echo "數值為4";
  break;
case 5:
  echo "數值為5";
  break;
default:
  echo "數值不在1到5之間";
}
?>
</body>
</html>
