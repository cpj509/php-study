<?php
header("Content-type: image/png");  //Client에게 파일 형식을 알려줌.
$string = $_GET['text'];
//밑에는 gdlib 기능.
$im     = imagecreatefrompng("button.png"); //png파일에서 이미지 생성.
$edgeColor = imagecolorallocate($im, 100, 200, 100);  //String color.
$px     = (imagesx($im) - 8 * strlen($string)) / 2; //x축 값 계산.
imagestring($im, 4, $px, 9, $string, $edgeColor);   //이미지 내부 스트링 생성.
imagepng($im);  //만들어진 이미지 전송.
imagedestroy($im);  //이미지 제작에 사용된 이미지들 제거.
?>