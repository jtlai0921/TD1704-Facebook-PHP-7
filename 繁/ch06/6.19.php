<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD></HEAD>
<BODY>
<?php
$arr = array('王小明','李麗麗','方芳芳','劉小帥','張大勇','張明明');
$str = serialize($arr);
echo $str."<br /><br />";
$new_arr = unserialize($str);
print_r($new_arr);
?>
</BODY>
</HTML>
