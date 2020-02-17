<html>
<head>
<title> 建構方法</title>
</head>
<body>
<?php
  class guests{
     private $name;
     private $gender;
     function __construct($name,$gender){
          $this->name = $name;
      $this->gender = $gender;
     }
       function getname(){
           return $this->name;
     }
       function getgender(){
           return $this->gender;
     }
  };
  $xiaoming = new guests("趙大勇","男"); 
  $lili =  new guests("方芳芳","女");
  echo $xiaoming->getname()."\t".$xiaoming->getgender()."<br />";
  echo $lili->getname()."\t".$lili->getgender();
?>
</body>
</html>
