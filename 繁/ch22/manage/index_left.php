<?php
include "session.inc";
?>
<HTML>
<HEAD><TITLE>管理导航菜单</TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<SCRIPT src="menu.js"></SCRIPT>
<LINK href="left.css" type=text/css rel=stylesheet>
</HEAD>
<BODY leftMargin=0 topMargin=0 marginwidth="0" marginheight="0">
<TABLE cellSpacing=0 cellPadding=0 width=180 align=center border=0>
  <TBODY>
  <TR>
    <TD vAlign=top height=44><IMG src="image/title.gif"></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=180 align=center>
  <TBODY>
  <TR>
    <TD class=menu_title id=menuTitle0
    onmouseover="this.className='menu_title2';"
    onmouseout="this.className='menu_title';" 
    background=image/title_bg_quit.gif 
      height=26>&nbsp;&nbsp;<A href="Admin_Main.php"  target="_top"><B><SPAN class=glow>管理首页</SPAN></B></A><SPAN class=glow> |
      </SPAN><A href="login.php" target="_top"><B><SPAN class=glow>退出</SPAN></B></A> </TD></TR>
  <TR>
    <TD id=submenu0 background=image/title_bg_admin.gif height=97>
      <DIV style="WIDTH: 180px">
      <TABLE cellSpacing=0 cellPadding=0 width=130 align=center>
        <TBODY>
        <TR>
          <TD height=16>您的用户名：<?php echo @$_SESSION['manage_name'];?></TD></TR>
        <TR>
          <TD height=16>您的身份：<?php echo @$_SESSION['manage_name'];?></TD></TR>
		  <TR>
		   <TD height=16>IP：<?php echo $_SERVER["REMOTE_ADDR"];?></TD>
          </TR>		  
        <TR>
		<TD height=16>&nbsp;</TD>
          </TR>
		</TBODY></TABLE></DIV>
      <DIV style="WIDTH: 167px">
      <TABLE cellSpacing=0 cellPadding=0 width=130 align=center>
        <TBODY>
        <TR>
          <TD height=20></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=167 align=center>
  <TBODY>
  <TR>
    <TD class=menu_title id=menuTitle1 
    onmouseover="this.className='menu_title2'" style="CURSOR: hand" 
    onclick="new Element.toggle('submenu1')" 
    onmouseout="this.className='menu_title'" 
    background=image/Admin_left_1.gif height=28 ;><SPAN class=glow>论坛板块管理</SPAN></TD>
  </TR>
  <TR>
    <TD id=submenu1 style="DISPLAY: none" align=right>
      <DIV class=sec_menu style="WIDTH: 165px">
      <TABLE cellSpacing=0 cellPadding=0 width=132 align=center>
        <TBODY>
		<TR>
          <TD height=20><A href="father_module_add.php" target=main>父板块添加</A></TD>
		</TR>
		<TR>
          <TD height=20><A href="father_module_list.php" target=main>父板块管理</A></TD>
		</TR>
		<TR>
          <TD height=20><A href="son_module_add.php" target=main>子板块添加</A></TD>
		</TR>
        <TR>
          <TD height=20><A href="son_module_list.php" target=main>子板块管理</A></TD>
        </TR>		
          </TABLE>
      </DIV>
      <DIV style="WIDTH: 158px">
      <TABLE cellSpacing=0 cellPadding=0 width=130 align=center>
        <TBODY>
        <TR>
          <TD height=4></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=167 align=center>
  <TBODY>
  <TR>
    <TD class=menu_title id=menuTitle2 
    onmouseover="this.className='menu_title2'" style="CURSOR: hand" 
    onclick="new Element.toggle('submenu2')" 
    onmouseout="this.className='menu_title'" 
    background=image/Admin_left_11.gif height=28 ;><SPAN class=glow>论坛用户管理</SPAN></TD>
  </TR>
  <TR>
    <TD id=submenu2 style="DISPLAY: none" align=right>
      <DIV class=sec_menu style="WIDTH: 165px">
      <TABLE cellSpacing=0 cellPadding=0 width=132 align=center>
        <TBODY>
        <TR>
          <TD height=20><A href="user_list.php" target=main>所有用户</A></TD>
        </TR>
		<TR>
          <TD height=20><A href="user_js.php" target=main>用户检索</A></TD>
		</TR>        
</TBODY></TABLE>
      </DIV>
      <DIV style="WIDTH: 158px">
      <TABLE cellSpacing=0 cellPadding=0 width=130 align=center>
        <TBODY>
        <TR>
          <TD height=4></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=167 align=center>
  <TBODY>
  <TR>
    <TD class=menu_title id=menuTitle3 
    onmouseover="this.className='menu_title2'" style="CURSOR: hand" 
    onclick="new Element.toggle('submenu3')" 
    onmouseout="this.className='menu_title'" 
    background=image/Admin_left_3.gif height=28 ;><SPAN class=glow>安全管理</SPAN></TD>
  </TR>
  <TR>
    <TD id=submenu3 style="DISPLAY: none" align=right>
      <DIV class=sec_menu style="WIDTH: 165px">
      <TABLE cellSpacing=0 cellPadding=0 width=132 align=center>
        <TBODY>
		<TR>
          <TD height=20><A href="user_pw_change.php" target=main>密码更改</A></TD>
		</TR>		
		<TR>
          <TD height=20><A href="../" target=_blank>帖子管理</A></TD>
		</TR>
</TBODY></TABLE>
      </DIV>
      <DIV style="WIDTH: 158px">
      <TABLE cellSpacing=0 cellPadding=0 width=130 align=center>
        <TBODY>
        <TR>
          <TD height=4></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=167 align=center>
  <TBODY>
  <TR>
    <TD class=menu_title id=menuTitle208 
    onmouseover="this.className='menu_title2';" 
    onmouseout="this.className='menu_title';" 
    background=image/Admin_left_04.gif 
      height=28><SPAN>系统信息</SPAN> </TD></TR>
  <TR>
    <TD align=right>
      <DIV class=sec_menu style="WIDTH: 165px">
      <TABLE cellSpacing=0 cellPadding=0 width=130 align=center>
        <TBODY>
        <TR>
          <TD height=20><br>版本号:verson 1.0<BR>版权所有：&nbsp;<A href= "http://www.quickbbs.net/" target=_blank>迅捷BBS</A>
		  <BR>设计制作：&nbsp;<A href="http://www.etpt.net/" target=_blank>迅捷BBS</A>
		  <BR>技术支持：&nbsp;<A href="http://bbs.etpt.net/" target=_blank>迅捷BBS</A>
		  <BR><BR></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
</BODY>
</HTML>
