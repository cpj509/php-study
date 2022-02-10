<?php
$dir = './';
$files1 = scandir($dir);
$files2 = scandir($dir, 1); //뒤에 숫자는 sort option. 

print_r($files1);
echo '<br>';
print_r($files2);