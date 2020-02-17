<html>
<head>
<title> 類別的宣告和案例的產生</title>
</head>
<body>
<?php
  class guests{
     private $name;
     private $gender;
     function setname($name){
          $this->name = $name;
     }
       function getname(){
           return $this->name;
     }
       function setgender($gender){
          $this->gender = $gender;
     }
       function getgender(){
           return $this->gender;
     }
  };
  $xiaoming = new guests;
  $xiaoming->setname("王小明");
  $xiaoming->setgender("男");
  $lili =  new guests;
  $lili->setname("李莉莉");
  $lili->setgender("女");
  echo $xiaoming->getname()."\t".$xiaoming->getgender()."<br />";
  echo $lili->getname()."\t".$lili->getgender();
?> 
</body>
</html>
