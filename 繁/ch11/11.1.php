<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><h2>GoodHome線上訂房表（檔案儲存）。</h2></HEAD>
<BODY>
<form action="12.2.php" method="post">
<table>
<tr bgcolor="#3399FF" >
    <td>客戶姓名:</td>
    <td><input type="text" name="customername" size="20" /></td>
</tr>
<tr bgcolor="#CCCCCC" >
    <td>客戶性別：</td>
    <td>
     <select name="gender">
        <option value="m">男</option>
        <option value="f">女</option>
       </select>
  </td>
</tr>
<tr bgcolor="#3399FF" >
    <td>到達時間:</td>
    <td>
     <select name="arrivaltime">
        <option value="1">一天後</option>
        <option value="2">兩天後</option>
    <option value="3">三天後</option>
    <option value="4">四天後</option>
    <option value="5">五天後</option>
       </select>
  </td>
</tr>
<tr bgcolor="#CCCCCC" >
    <td>電話:</td>
    <td><input type="text" name="phone" size="20" /></td>
</tr>
<tr bgcolor="#3399FF" >
    <td>email:</td>
    <td><input type="text" name="email" size="30" /></td>
</tr>
<tr bgcolor="#666666" >
    <td align="center"><input type="submit" value="確認訂房訊息" /></td>
</tr>
</table>
</form>
</BODY>
</HTML>
