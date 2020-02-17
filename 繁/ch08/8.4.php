<html>
<head>
<title> 類別的繼承</title>
</head>
<body>
<?php
  class Vegetables{
     var $tomato ="西紅柿";                       //定義變數
     var $cucumber="黃瓜";
  };
  class VegetablesType extends Vegetables{             //類別之間繼承
var $potato="馬鈴薯";                         //定義子類別的變數
     var $radish="蘿蔔";
  };
  $vegetables=new VegetablesType();                      //案例化物件
  echo "蔬菜內含：".$vegetables->tomato."，".$vegetables->cucumber."，".$vegetables->potato." ，".$vegetables->radish;
?>
</body>
</html>
