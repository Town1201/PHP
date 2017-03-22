<?php 
$img = imagecreatefromjpeg('s1.jpg');

imagestring($img, 4, 4, 4, 'lz', imagecolorallocate($img, 255, 0, 0));
header('Content-type:image/png');
imagepng($img);


 ?>