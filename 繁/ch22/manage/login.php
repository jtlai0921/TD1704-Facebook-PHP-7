<?php

   include "../inc/mysql.inc";
	include "../inc/myfunction.inc";
	$aa=new mysql;
	$bb=new myfunction;
	$aa->link("");
    $_SESSION['manage_name']="";
	$_SESSION['manage_tag']="";
	
        
?>
<head>
<style>
<!--
td           { font-size: 10pt }
-->
</style>
<title>:::管理员登陆==迅捷BBS系统:::</title>
</head>
<body  onLoad="tijiao.username.value='';tijiao.username.focus();">

<p align="center">　</p>
<br>
　</font></p>
<div align="center">
  <center>
  
  <form method=POST name="tijiao" action="auth.php">
  <table border="1" cellpadding="0" cellspacing="0" bordercolor="#111111" width="240" height="126" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" style="border-collapse: collapse">
    <tr>
      <td width="238" colspan="2" height="25" bgcolor="#A8A3AD">
      <p align="center"><b><font color="#FFFFFF">迅捷BBS后台管理系统</font></b></td>
    </tr>
    <tr>
      <td width="64" height="26" bgcolor="#E3E1E6">
      <p align="center">账&nbsp; 号：</td>
      <td height="26" bgcolor="#E3E1E6" width="173">
      <input type="text" name="username" size="20" style="color: #A8A3AD; border-style: solid; border-width: 1; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1"></td>
    </tr>
    <tr>
      <td width="64" height="26" bgcolor="#E3E1E6">
      <p align="center">口&nbsp; 令：</td>
      <td height="26" bgcolor="#E3E1E6" width="173">
      <input type="password" name="password" size="20" style="color: #A8A3AD; border-style: solid; border-width: 1; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1"></td>
    </tr>
    <tr>
      <td width="238" height="29" bgcolor="#E3E1E6" colspan="2">
      <p align="center"><input type="submit" value="登 陆" name="login">&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="reset" value="取 消" name="cancel"></td>
    </tr>
    <tr>
      <td width="238" colspan="2" height="20" bgcolor="#A8A3AD">　</td>
    </tr>
  </table>
  </form>
  </center>
</div>
</body>
