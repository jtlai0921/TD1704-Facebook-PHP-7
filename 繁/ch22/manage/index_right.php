<?php
include "fun_head.php";
head("管理首页");
?>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD width=20 rowSpan=2>&nbsp;</TD>
    <TD class=topbg align=middle width=100>论坛板块管理</TD>
    <TD width=300>&nbsp;</TD>
    <TD width=40 rowSpan=2>&nbsp;</TD>
    <TD class=topbg align=middle width=100>论坛用户管理</TD>
    <TD width=300>&nbsp;</TD>
    <TD width=21 rowSpan=2>&nbsp;</TD></TR>
  <TR class=topbg2>
    <TD colSpan=2 height=1></TD>
    <TD colSpan=2></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD width=20>&nbsp;</TD>
    <TD width=400><br>　　本管理某块共分四个子模块:父模块添加、父模块管理、子模块添加、子某块管理。其中父模块添加和子模块添加可以实现本论坛的父模块和子模块的添加；父模块的管理和子模块的管理可以实现本论坛父模块和子模块的删除、编辑等功能。<BR>
      　　</TD>
    <TD width=40>&nbsp;</TD>
    <TD 
      width=400><br>　　本管理某块共分两个子模块:所有用户和用户检索。其中所有用户按用户注册的后先顺序分页依次列出。用户检索是有管理员输入要查询的论坛注册用户的用户名，系统通过数据库查询出该用户的相关信息，并列出，而且管理员也可以在查询注册用户后直接删除该用户。<br>
      <br></TD>
    <TD width=21>&nbsp;</TD></TR></TBODY></TABLE>
<TABLE height=10 cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD width=20 rowSpan=2>&nbsp;</TD>
    <TD class=topbg align=middle width=100>安全管理</TD>
    <TD width=300>&nbsp;</TD>
    <TD width=40 rowSpan=2>&nbsp;</TD>
    <TD class=topbg align=middle width=100>系统信息</TD>
    <TD width=300>&nbsp;</TD>
    <TD width=21 rowSpan=2>&nbsp;</TD></TR>
  <TR class=topbg2>
    <TD colSpan=2 height=1></TD>
    <TD colSpan=2></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD width=20>&nbsp;</TD>
    <TD 
      width=400><br>　　本管理某块共分两个子模块:密码更改和帖子管理。其中密码更改提供了管理员更改密码的功能，但必须输入原密码和两次新密码；帖子管理是直接进入论坛的主界面，但与普通注册用户所不同的是，在论坛的每个发帖和回复后面都多了一个删除按钮，可以通过此按钮删除相关帖子或回复。</TD>
    <TD width=40>&nbsp;</TD>
    <TD 
      width=400 valign="top"><br />　　
      本某块提供了本论坛的版本号、版权所有、设计制作以及技术支持等信息。</TD>
    <TD width=21>&nbsp;</TD></TR></TBODY></TABLE>
<TABLE height=70 cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
<TD></TD></TR></TBODY></TABLE>
<TABLE height=10 cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD></TD></TR></TBODY></TABLE>
<BR>
	<?php
	include "bottom.php";
	?>
