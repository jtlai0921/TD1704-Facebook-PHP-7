<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>===迅捷BBS系统===</title>
<link href="inc/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
@session_start();
include "inc/mysql.inc";
include "inc/myfunction.inc";
include "inc/head.php";
$aa=new mysql;
$bb=new myfunction;
$aa->link("");
include "inc/total_info.php";
$module_id=@$_GET['module_id'];
$del_id=@$_GET['del_id'];
if ($bb->son_module_idtouser_name($module_id)==@$_SESSION['user_name']){
	$query="delete from note_info where id='".$del_id."'";
	$aa->excu($query);
	}
$query="select * from note_info where module_id='".$module_id."' order by time desc";
$add="module_id=".$module_id."&";
?>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="73%" height="30"><a href="./">迅捷ＢＢＳ系统</a>>> 
	<?php
	echo "<a href=module_list.php?module_id=".$module_id.">";
	echo $bb->son_module_idtofather_name($module_id);
	echo "</a>>>";
	echo $bb->son_module_idtomodule_name($module_id);
	?></td>
    <td width="27%" align="right" valign="middle"><a href="new_note.php"><img src="pic_sys/post.gif" width="82" height="20"></a></td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" align="left" valign="middle"><?php $bb->page($query,@$page_id,$add,20)?></td>
  </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
  <tr>
    <td width="3%" height="25" align="center" valign="middle" bgcolor="5F8AC5">&nbsp;</td>
    <td width="5%" align="center" valign="middle" bgcolor="5F8AC5">人气</td>
    <td width="50%" align="center" valign="middle" bgcolor="5F8AC5">标　　题</td>
    <td width="9%" align="center" valign="middle" bgcolor="5F8AC5">发起人</td>
    <td width="5%" align="center" valign="middle" bgcolor="5F8AC5">帖子数</td>
    <td width="16%" align="center" valign="middle" bgcolor="5F8AC5">最后发表时间</td>
    <td width="12%" align="center" valign="middle" bgcolor="5F8AC5">最后发表人</td>
  </tr>
  <?php
	$result=$aa->excu($query);
	while($note=mysql_fetch_array($result)){
  ?>  
  <tr>
    <td height="25" align="center" valign="middle"><img src="pic_sys/li-3.gif" width="14" height="11"></td>
    <td height="25" align="center" valign="middle"><?php echo $bb->note_idtotimes($note['id']);?></td>
    <td height="25" align="left" valign="middle"><?php 
	echo "<a href=note_show.php?module_id=".$module_id."&note_id=".$note['id'].">".$note['title']."</a>";
	if ($bb->son_module_idtouser_name($module_id)==$_SESSION['user_name'] || $_SESSION['manage_tag']==1){
	echo "&nbsp;&nbsp;<a href=module_list.php?module_id=".$module_id."&page_id=".$page_id."&del_id=".$note['id'].">删除此帖</a>";
	}
	?></td>
    <td height="25" align="center" valign="middle"><?php echo $note['user_name'];?></td>
    <td height="25" align="center" valign="middle"><?php echo $bb->note_idtonote_num($note['id']);?></td>
    <td height="25" align="center" valign="middle"><?php echo $bb->note_idtolast_time($note['id']);?></td>
    <td height="25" align="center" valign="middle"><?php echo $bb->note_idtolast_user_name($note['id']);?></td>
  </tr>
  <tr>
    <td height="1" colspan="7" bgcolor="#CCCCCC"></td>
  </tr>
  <?php
  }
  ?>
</table>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" align="right" valign="bottom">
	<?php
	$query="select * from note_info where module_id='".$module_id."' order by time desc";
	$bb->page($query,@$page_id,$add,20)
	?></td>
  </tr>
</table>
<?php
include "inc/foot.php";
?>
</body>
</html>
