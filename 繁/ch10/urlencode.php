<?php
$user = '王小明 劉曉莉';
$link1 = "index.php?userid=".urlencode($user)."<br />";
$link2 = "index.php?userid=".rawurlencode($user)."<br />";
echo $link1.$link2;
echo urldecode($link1);
echo urldecode($link2);
echo rawurldecode($link2);
?>
