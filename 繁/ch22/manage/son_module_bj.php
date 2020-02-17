<?php
include "session.inc";
include "fun_head.php";
head("子板块管理>>编辑");
include "../inc/mysql.inc";
include "../inc/myfunction.inc";
$aa=new mysql;
$bb=new myfunction;
$aa->link("");
$module_id=$_GET['module_id'];
$update_tag=@$_GET['update_tag'];
if ($update_tag==1){
$father_module_id=$_POST['father_module_id'];
$module_name=$_POST['module_name'];
$module_cont=$_POST['module_cont'];
$user_name=$_POST['user_name'];
	if ($father_module_id=="" or $module_name=="" or $module_cont==""){
	echo "===对不起，您编辑子板块不成功：<font color=red>隶属的父板块、子板块的名称和简介全不能为空</font>！===";
	}else{
	$query="update son_module_info set father_module_id='$father_module_id',module_name='$module_name',module_cont='$module_cont',user_name='$user_name' where id='$module_id'";
	$aa->excu($query);
	echo "===恭喜您，编辑子板块添加成功！===";
	}
}
$query="select * from son_module_info where id='$module_id'";
$rst=$aa->excu($query);
$module=mysql_fetch_array($rst,MYSQL_ASSOC);
?>
<table width="100%" height="389" border="0" cellpadding="0" cellspacing="0" bgcolor="f0f0f0">
  <tbody>
    <tr>
      <td width="20">&nbsp;</td>
      <td valign="top"><br />
        <form action="?update_tag=1&module_id=<?php echo $module_id?>" method="post" name="form1" id="form1">
          <table width="408" height="139" border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="#FFFFFF" bgcolor="449ae8">
            <tr bgcolor="#dcccccc">
              <td width="94" height="25" bgcolor="e0eef5"><div align="right">隶属的父板块:</div></td>
              <td width="306" bgcolor="e0eef5"><?php $bb->father_module_list($module['father_module_id']);?></td>
            </tr>
            <tr bgcolor="#dddddd">
              <td height="25" bgcolor="#FFFFFF"><div align="right">子板块名称:</div></td>
              <td bgcolor="#FFFFFF"><input type="text" size="20" name="module_name" value="<?php echo $module['module_name']?>" /></td>
            </tr>
            <tr bgcolor="#dddddd">
              <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">简介:</td>
              <td bgcolor="#FFFFFF"><textarea name="module_cont" cols="42" rows="3"><?php echo $module['module_cont']?></textarea></td>
            </tr>
            <tr bgcolor="#dddddd">
              <td height="25" align="right" valign="middle" bgcolor="#FFFFFF">版主用户名:</td>
              <td bgcolor="#FFFFFF"><input type="text" size="20" name="user_name" value="<?php echo $module['user_name']?>" />
                可不填。</td>
            </tr>
            <tr bgcolor="#dddddd">
              <td height="33" colspan="2" bgcolor="e0eef5"><div align="center">
                  <input name="submit" type="submit" value="提交" />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input name="reset" type="reset" value="重置" />
              </div></td>
            </tr>
          </table>
        </form>
        <br />
      <br /></td>
      <td width="20">&nbsp;</td>
    </tr>
  </tbody>
</table>
<?php
	include "bottom.php";
?>
