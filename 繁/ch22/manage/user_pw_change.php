<?php
include "session.inc";
include "fun_head.php";
head("密码更改");
include "../inc/mysql.inc";
include "../inc/myfunction.inc";
$aa=new mysql;
$bb=new myfunction;
$aa->link("");
///////////更改密码////////////////////////////////
$tijiao=$_POST[tijiao];
if ($tijiao=="提 交"){
	$pw_old=$_POST[pw_old];
	$pw_new1=$_POST[pw_new1];
	$pw_new2=$_POST[pw_new2];
	if ($pw_new1!=$pw_new2){
		echo "===您两次输入的新密码不匹配,请重新输入!===";
	}else{
		$query="select * from manage_user_info where user_name='$_SESSION[manage_name]' and user_pw='$pw_old'";
		
		$rst=$aa->excu($query);
		if (mysql_num_rows($rst)==0){
			echo "===您输入的旧密码不正确,请重新输入!===";
		}else{
			$query="update manage_user_info set user_pw='$pw_new1' where user_name='$_SESSION[manage_name]'";
			$aa->excu($query);
			echo "===恭喜您,您的登陆密码修改成功!===";
		}
	}	
}
?>
<table width="100%" height="390" border="0" cellpadding="0" cellspacing="0" bgcolor="f0f0f0">
  <tbody>
    <tr>
      <td width="20">&nbsp;</td>
      <td valign="top"><br />
        <form id="form1" name="form1" method="post" action="#">
        <table width="60%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="449ae8">
        <tr bgcolor="#cccccc">
		  <td width="27%" height="23" align="right" bgcolor="e0eef5">用户名:</td>
		  <td width="73%" align="left" bgcolor="e0eef5"><?php echo $_SESSION[manage_name]?></td>
        </tr>
          <tr>
          <td height="19" align="right" bgcolor="#FFFFFF">原口令:</td>
          <td align="left" bgcolor="#FFFFFF"><input type="text" name="pw_old" size="16" /></td>
          </tr>
          <tr>
            <td height="19" align="right" bgcolor="#FFFFFF">新密码:</td>
            <td align="left" bgcolor="#FFFFFF"><input type="text" name="pw_new1" size="16" /></td>
          </tr>
          <tr>
            <td height="19" align="right" bgcolor="#FFFFFF">再次新密码:</td>
            <td align="left" bgcolor="#FFFFFF"><input type="text" name="pw_new2" size="16" /></td>
          </tr>
          <tr>
            <td height="19" colspan="2" align="center" bgcolor="#FFFFFF"><input type="submit" name="tijiao" value="提 交" />
            &nbsp;&nbsp;&nbsp;
			<input type="reset" name="Submit2" value="重 置" /></td>
          </tr>        
      </table>  
	  </form>      
      </td>
      <td width="20">&nbsp;</td>
    </tr>
  </tbody>
</table>
  <?php
	include "bottom.php";
  ?>

