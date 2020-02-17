<?php
include "../inc/mysql.inc";
	include "../inc/myfunction.inc";
	$aa=new mysql;
	$bb=new myfunction;
	$aa->link("");
        $login=@$_POST['login'];
	if ($login=="登 陆"){
		$username=$_POST['username'];
		$password=$_POST['password'];
		if ($username!="" and $password!=""){
			$query="select * from manage_user_info where user_name='".$username."'";
			$rst=$aa->excu($query);	
			$user=mysql_fetch_array($rst,MYSQL_ASSOC);
			if ($user['user_pw']==$password){
				$_SESSION['manage_name']=$user['user_name'];
				$_SESSION['manage_tag']=1;
				header("location:./index.php");
			}
		}
                
	}
?>