<?php
$subject = 'sa54d4qw4d65s4ad89 https://naver.com naver@naver.com 010-0000-0000';
preg_match('~(https://\w+\.\w+)\s(\w+@\w+\.\w+)~', $subject, $a);   //preg_match의 세 번째 인자(변수)가 있으면 결과가 그곳에 들어감.
var_dump($a);
echo '<br>';
echo "Homepage : ".$a[1];
echo "<br>";
echo "Email : ".$a[2];
?>