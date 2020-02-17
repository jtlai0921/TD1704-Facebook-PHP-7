<html>
<head>
<title> 類別的繼承與接口</title>
</head>
<body>
<?php
  class roomtypes{
   public $customertype;
      private $hotelname="GoodHome";
   protected $roomface="適合所有人";
   function __construct(){ 
    $this->customertype="everyonefit";
   }
   function telltype(){
      echo "此房間型態為".$this->customertype."。<br />";
   }
   function hotelface(){
      echo "此房間".$this->roomface."。<br />";
   }
   final function welcomeshow(){
      echo "歡迎光臨".$this->hotelname."。<br />";
   }
  }
  class nonviproom extends roomtypes{
    function __construct(){
    $this->customertype="nonvip";
   }
     function telltype(){
    echo "此".__CLASS__."房間型態為".$this->customertype."。<br />";
   }
   function hotelface(){
      echo "此房間不是".$this->roomface."。<br />";
   }
  }
  class viproom extends roomtypes implements showprice{
      
   function __construct(){
    $this->customertype="vip";
   }
   
   function showprice(){
        if ( __CLASS__ == "superviprooms"){
            echo "價格高於500元。<br />";    
      }else{
            echo "價格低於500元。<br />";
      }
   }
  }
  final class superviprooms implements showprice, showdetail{
    function showprice(){
        if ( __CLASS__ == "superviprooms"){
            echo "價格高於500元。<br />";    
      }else{
            echo "價格低於500元。<br />";
      }
   }
   function showdetail(){
        if ( __CLASS__ == "superviprooms"){
            echo "超級vip客戶可以使用會員卡取得優惠。<br />";    
         }else{
            echo "普通客戶與vip客戶不能使用會員卡。<br />";
         }
  }
  interface showprice{
      function showprice();
  }
  interface showdetail{
     function showdetail();
  }
  $room2046 = new roomtypes();
  $room2046->telltype();
  $room2046->hotelface();
  $room2046->welcomeshow();
  $room307 = new nonviproom();
  $room307->telltype();
  $room307->hotelface();
  $roomv2 = new viproom();
  $roomv2->telltype();
  $roomv2->showprice();
  $roomsuperv3 = new superviprooms();
  $roomsuperv3->showprice();
  $roomsuperv3->showdetail();
?>
</body>
</html>
