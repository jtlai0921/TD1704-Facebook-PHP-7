<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>===迅捷BBS系统===</title>
<link href="inc/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include "inc/mysql.inc";
include "inc/myfunction.inc";
include "inc/head.php";
$aa=new mysql;
$bb=new myfunction;
$aa->link("");
include "inc/total_info.php";

?>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="73%" height="30"><a href="./">迅捷ＢＢＳ系统</a>>>新用户注册</td>
    <td width="27%" align="right" valign="middle"><a href="new_note.php"></a></td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
  <tr>
    <td height="25" align="center" valign="middle" bgcolor="5F8AC5">发 布 新 贴</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">
	<?php
	//接收提交表单内容检验数据库中是否已经存在此用户名，不存在写入数据库
	$tijiao=@$_POST['tijiao'];
	if ($tijiao=="提交"){
		$user_name=@$_POST['user_name'];
		$query="select * from user_info where user_name='$user_name'";
		$rst=$aa->excu($query);
		if (mysql_num_rows($rst)!=0){
			echo "===您注册的用户名已经存在，请选择其他的用户名重新注册！===";
		}else{
			$user_pw1=$_POST['user_pw1'];
			$user_pw2=$_POST['user_pw2'];
			if ($user_pw1!=$user_pw2){
				echo "===您两次输入的密码不匹配，请重新输入！===";
			}else{
				$today=date("Y-m-d H:i:s");
				$query="insert into user_info(user_name,user_pw,time1) values('$user_name','$user_pw1','$today')";
				if ($aa->excu($query)){
					echo "===恭喜您，注册成功！请<a href=../>返回主页</a>登陆===";
					$register_tag=1;
				}
			}
		}
	}
	//显示注册表单
	if (@$register_tag!=1){	
	?>
	<form name="form1" method="post" action="#">
	<table width="500" border="0" cellpadding="0" cellspacing="2">
      <tr>
        <td width="122" height="26" align="right" valign="middle" bgcolor="#CCCCCC">用户名:</td>
        <td width="372" height="26" align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="user_name"></td>
      </tr>
      <tr>
        <td height="26" align="right" valign="middle" bgcolor="#CCCCCC">密码:</td>
        <td height="26" align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="user_pw1"></td>
      </tr>
      <tr>
        <td height="26" align="right" valign="middle" bgcolor="#CCCCCC">重复密码:</td>
        <td height="26" align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="user_pw2"></td>
      </tr>
      <tr>
        <td height="26" colspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><input type="submit" name="tijiao" value="提 交">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="Submit2" value="重 置"></td>
        </tr>
    </table>
	</form>	
	<?php
	}
	?>	
	</td>
  </tr>
  <tr>
    <td height="1" bgcolor="#CCCCCC"></td>
  </tr>
</table>
<?php
include "inc/foot.php";
?>
</body>
</html>
