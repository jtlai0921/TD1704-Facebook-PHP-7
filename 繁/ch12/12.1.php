<?php
$im = imagecreate(200,300);                     //建立一個畫布
$white = imagecolorallocate($im, 8,2,133);     //設定畫布的背景彩色為一種藍色
imagegif($im);                               //輸出圖形
?>
