<html>
<head>
<title> 類別的繼承</title>
</head>
<body>
<?php
  abstract class Vegetables{                                //定義抽象類別Vegetables
     abstract function go_Vegetables();                       //定義抽象方法go_Vegetables
}
class Vegetables_potato extends Vegetables{                    //馬鈴薯類別繼承蔬菜類別
     public function go_Vegetables(){                       //重新定義抽象方法
           echo “我們開始種植馬鈴薯” ;                   //輸出訊息
     }
   }
class Vegetables_radish extends Vegetables{                 //蘿蔔類別繼承蔬菜類別
     public function go_Vegetables(){                      //重新定義抽象方法
           echo “我們開始種植蘿蔔” ;
     }
   }
   function change($obj){                                 //自訂方法根據物件呼叫不同的方法
       if($obj instanceof Vegetables ){
           $obj->go_Vegetables();
       }else{
            echo "傳入的參數不是一個物件";              //輸出訊息
       }
    }
    echo "案例化Vegetables_potato："; 
    change(new Vegetables_potato());                       //案例化Vegetables_potato
    echo "<br>";
    echo "案例化Vegetables_ radish："; 
    change (new Vegetables_radish ());                       //案例化Vegetables_ radish
?>
</body>
</html>
