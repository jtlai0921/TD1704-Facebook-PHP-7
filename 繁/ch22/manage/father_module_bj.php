<?php
include "session.inc";
include "fun_head.php";
head("父板块管理==>>编辑");
include "../inc/mysql.inc";
include "../inc/myfunction.inc";
$aa=new mysql;
$bb=new myfunction;
$aa->link("");
$module_id=$_GET['module_id'];
$update_tag=@$_GET['update_tag'];
if ($update_tag==1){
$show_order=$_POST['show_order'];
$module_name=$_POST['module_name'];
	if ($show_order=="" or $module_name==""){
	echo "===对不起，您编辑父板块不成功：<font color=red>显示序号和父板块名称全不能为空</font>！===";
	}else{
	$query="update father_module_info set module_name='$module_name',show_order='$show_order' where id='$module_id'";
	$aa->excu($query);
	echo "===恭喜您，编辑父板块添加成功！===";
	}
}
$query="select * from father_module_info where id='$module_id'";
$rst=$aa->excu($query);
$module=mysql_fetch_array($rst,MYSQL_ASSOC);
?>
<table width="100%" height="389" border="0" cellpadding="0" cellspacing="0" bgcolor="f0f0f0">
  <tbody>
    <tr>
      <td width="20">&nbsp;</td>
      <td valign="top"><br />
        <form action="?update_tag=1&module_id=<?php echo $module_id?>" method="post" name="form1" id="form1">
          <table width="408" height="87" border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="#FFFFFF" bgcolor="449ae8">
            <tr bgcolor="#dcccccc">
              <td width="94" height="25" bgcolor="e0eef5"><div align="right">显示序号:</div></td>
              <td width="306" bgcolor="e0eef5"><input type="text" size="6" name="show_order" value="<?php echo $module['show_order']?>" />
                请填写一整数，如：1
              。</td>
            </tr>
            <tr bgcolor="#dddddd">
              <td height="25" bgcolor="#FFFFFF"><div align="right">父板块名称:</div></td>
              <td bgcolor="#FFFFFF"><input type="text" size="20" name="module_name" value="<?php echo $module['module_name']?>" /></td>
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
