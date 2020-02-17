<?php
   $ysize =200;
   $xsize =300;
   $theimage = imagecreatetruecolor($xsize,$ysize);
   $color2 = imagecolorallocate($theimage, 8,2,133);
   $color3 = imagecolorallocate($theimage, 230,22,22);
   imagefill($theimage, 0, 0,$color2);
   $fontname='simhei.ttf';   
   
   $zhtext = "這是一個把中文用黑體顯示的圖片。";
   $text = iconv("GB2312", "UTF-8", $zhtext);
   
   imagettftext($theimage,12,0,20,100,$color3,$fontname,$text);
   
   header('content-type: image/png');
   imagepng($theimage);
   
   imagedestroy($theimage);
?>

