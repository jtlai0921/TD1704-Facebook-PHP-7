<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>===迅捷BBS系统===</title>
<link href="inc/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
//@session_start();
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
    <td width="73%" height="30"><a href="./">迅捷ＢＢＳ系统</a>>>发新贴子</td>
    <td width="27%" align="right" valign="middle"><a href="new_note.php"><img src="pic_sys/post.gif" width="82" height="20"></a></td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
  <tr>
    <td height="25" align="center" valign="middle" bgcolor="5F8AC5">发 布 新 贴</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">
	<?php
	
	if (@$_SESSION['user_name']==""){
	echo "===请先登录！==";
	}else{	
	//接收提交表单内容写入数据库
	$tijiao=@$_POST['tijiao'];
	if ($tijiao=="提交"){
		$module_id=@$_POST['module_id'];
		$title=@$_POST['title'];
		$cont=@$_POST['cont'];
		$cont=$bb->str_to($cont);
		$today=date("Y-m-d H:i:s");
		if ($module_id!="" and $title!="" and $cont!=""){
			$query="insert into note_info(module_id,title,cont,time,user_name) values('$module_id','$title','$cont','$today','".$_SESSION['user_name']."')";
			if ($aa->excu($query)){
			echo "===新贴发布成功，请继续！===";
			}
		}else{
			echo "===请选择子模块，而且标题和内容均不能为空！===";
		}
	}
	?>
	<form name="form1" method="post" action="new_note.php">
	<table width="500" border="0" cellpadding="0" cellspacing="2">
      <tr>
        <td width="122" height="26" align="right" valign="middle" bgcolor="#CCCCCC">隶属板块:</td>
        <td width="372" height="26" align="left" valign="middle" bgcolor="#CCCCCC">
		<?php
		$bb->son_module_list("");
		?>      
		</td>
      </tr>
      <tr>
        <td height="26" align="right" valign="middle" bgcolor="#CCCCCC">标题:</td>
        <td height="26" align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="title"></td>
      </tr>
      <tr>
        <td height="26" align="right" valign="middle" bgcolor="#CCCCCC">内容:</td>
        <td height="26" align="left" valign="middle" bgcolor="#CCCCCC"><textarea name="cont" cols="50" rows="8"></textarea></td>
      </tr>
      <tr>
        <td height="26" align="right" valign="middle" bgcolor="#CCCCCC">发贴人:</td>
	
        <td height="26" align="left" valign="middle" bgcolor="#CCCCCC">&nbsp;<?php echo $_SESSION['user_name'];?></td>
      </tr>
      <tr>
        <td height="26" align="right" valign="middle" bgcolor="#CCCCCC">时间:</td>
        <td height="26" align="left" valign="middle" bgcolor="#CCCCCC">系统将自动记录！</td>
      </tr>
      <tr>
        <td height="26" colspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><input type="submit" name="tijiao" value="提交">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="Submit2" value="重 置"></td>
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
