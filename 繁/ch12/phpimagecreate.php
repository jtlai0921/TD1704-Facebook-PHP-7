<?php
   $theimage = imagecreatefromjpeg('newimage.jpeg');
   $color1 = imagecolorallocate($theimage, 255,255,255);
   $color3 = imagecolorallocate($theimage, 230,22,22);
   imagestring($theimage,5,60,100,'Text added to this image.',$color1);
   header('content-type: image/png');
   imagepng($theimage);
   imagepng($theimage,'textimage.png');
   imagedestroy($theimage);
?>

