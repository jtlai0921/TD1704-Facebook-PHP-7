<HTML>
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></HEAD>
<BODY>
<?php
  $members = Null;
  function checkmembers($members){
    if ($members < 1){
      echo "我們不能為少於一人的顧客提供房間。<br />";
    }else{
      echo "歡迎來到GoodHome酒店。<br />";
    }
  }
  checkmembers(2);
  checkmembers(0.5);
  function checkmembersforroom($members){
    if ($members < 1){
      echo "我們不能為少於一人的顧客提供房間。<br />";
    }elseif( $members == 1 ){
      echo "歡迎來到GoodHome酒店。 我們將為您準備單床房。<br />";
    }elseif( $members == 2 ){
      echo "歡迎來到GoodHome酒店。 我們將為您準備標准間。<br />";
    }elseif( $members == 3 ){
      echo "歡迎來到GoodHome酒店。 我們將為您準備三床房。<br />";
    }else{
    echo "請直接電話聯繫我們，我們將依照實際情況為您準備合適的房間。<br />";
  }
  }
  checkmembersforroom(1);
  checkmembersforroom(2);
  checkmembersforroom(3);
  checkmembersforroom(5);
  function switchrooms($members){
    switch ($members){
             case  1:
               echo "歡迎來到GoodHome酒店。 我們將為您準備單床房。<br />";
         break;
             case  2: 
               echo "歡迎來到GoodHome酒店。 我們將為您準備標准間。<br />";
         break;
             case  3:
               echo "歡迎來到GoodHome酒店。 我們將為您準備三床房。<br />";
         break;
             default:
             echo "請直接電話聯繫我們，我們將依照實際情況為您準備合適的房間。";
         break;
           }
   }
  switchrooms(1);
  switchrooms(2);
  switchrooms(3);
  switchrooms(5);
?>
</BODY>
</HTML>
