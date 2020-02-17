<html>
<head>
<title> 多形性</title>
</head>
<body>
<?php
  interface Vegetables{                                //定義接口Vegetables
      public function go_Vegetables();                       //定義接口方法
}
class Vegetables_potato implements Vegetables{                    // Vegetables_potato實現Vegetables接口
     public function go_Vegetables(){                       //定義go_Vegetables方法
           echo “我們開始種植馬鈴薯” ;                   //輸出訊息
     }
   }
class Vegetables_radish implements Vegetables{                 // Vegetables_radish實現Vegetables接口
     public function go_Vegetables(){                      //定義go_Vegetables方法
           echo “我們開始種植蘿蔔” ;                    //輸出訊息
     }
   }
   function change($obj){                                 //自訂方法根據物件呼叫不同的方法
       if($obj instanceof Vegetables ){
           $obj->go_Vegetables();
       }else{
            echo “傳入的參數不是一個物件”;              //輸出訊息
       }
    }
    echo "案例化Vegetables_potato："; 
    change(new Vegetables_potato());                       //案例化Vegetables_potato
    echo "<br>";
    echo "案例化Vegetables_radish："; 
    change (new Vegetables_radish ());                       //案例化Vegetables_ radish
?>
</body>
</html>
