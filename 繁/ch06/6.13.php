<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<HEAD><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><h2>移除陣列結尾的最後一個元素。</h2></HEAD>
<BODY>
<?php
   $serivces = array('s1'=>'洗衣','s2'=>'訂餐','s3'=>'導游','s4'=>'翻譯');
   $deletedserivces = array_pop($serivces);
   echo $deletedserivces."<br />";
   print_r($serivces);
?>
</BODY>
</HTML>
