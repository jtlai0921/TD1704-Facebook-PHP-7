<?php
if(!$_GET['u'])
{
  echo '參數還沒有輸入。';
}else{
    $user=$_GET['u'];
    switch ($user){
	    case 1:
		    echo "使用者是王小明";
			break;
		case 2: 
		    echo "使用者是李麗麗";
			break;
    }
}
?>
