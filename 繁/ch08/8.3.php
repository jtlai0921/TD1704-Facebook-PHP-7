<html>
<head>
<title> 存取函數</title>
</head>
<body>
<?php
  class guests{
     public $property;
     function __set($propName,$propValue){
          $this->$propName = $propValue;
     }
       function __get($propName){
           return $this->$propName;
     }
  };
  $xiaoshuai = new guests;
  $xiaoshuai->name = "劉小帥";
  $xiaoshuai->gender = "男性";
  $dingdang = new guests;
  $dingdang->name = "丁叮當";
  $dingdang->gender = "女性";
  $dingdang->age = 28; 
  echo $xiaoshuai->name." 是 ".$xiaoshuai->gender."<br />";
  echo $dingdang->name." 是一位 ".$dingdang->age." 歲 ".$dingdang->gender."<br />"; 
?>
</body>
</html>
