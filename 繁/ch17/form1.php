<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>驗證表單元素的值是否為空</title>
</head>
<script language="javascript">
function mycheck(){
if(myform.user.value=="")
{alert("使用者名稱稱不能為空！！");myform.user.focus();return false;}
if(myform.pwd.value=="")
{alert("使用者密碼不能為空！！");myform.pwd.focus();return false;}
}
</script>
<body>
<form name="myform" method="post" action="">
  <table width="532" height="183" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCFF66" >
    <tr>
      <td height="71" colspan="2" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td width="249" height="30" align="center">&nbsp;</td>
      <td width="281" align="left">
		使用者名稱：<input name="user" type="text" id="user" size="20"> <br><br>
		密&nbsp;&nbsp;碼：<input name="pwd" type="password" id="pwd" size="20">
	  </td>
    </tr>
    <tr>
      <td height="43" align="center">&nbsp;</td>
      <td height="43" align="center">
		<input type="submit" name="submit" onClick="return mycheck();" value="登入">&nbsp;
		<input type="reset" name="Submit2" value="重設">
	  </td>
    </tr>
  </table>
</form>
</body>
</html>
