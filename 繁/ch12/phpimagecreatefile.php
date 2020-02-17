<?php
   $ysize =200;
   $xsize =300;
   $theimage = imagecreatetruecolor($xsize,$ysize);
   
   $color2 = imagecolorallocate($theimage, 8,2,133);
   $color3 = imagecolorallocate($theimage, 230,22,22);
   
   imagefill($theimage, 0, 0,$color2);
   imagearc($theimage,100,100,150,200,0,270,$color3);
   
   imagejpeg($theimage,"newimage.jpeg");
   header('content-type: image/png');
   imagepng($theimage);
   
   imagedestroy($theimage);
?>

