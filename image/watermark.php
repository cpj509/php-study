<?php
$stamp = imagecreatefrompng('text.png');
$im = imagecreatefrompng('original.png');

$marge_right = 20;
$marge_bottom = 20;
$sx = imagesx($stamp);
$sy = imagesy($stamp); 

//destination, source, source가 위치할 x값, source가 위치할 y값, source의 시작 x 값, source의 시작 y 값, source의 크기(x축). source의 크기(y축).
imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 2, 2, imagesx($stamp) - 2, imagesy($stamp) - 2);

header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>