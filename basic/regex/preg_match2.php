<?php
preg_match('@^(?:http://)?([^/]+)@i', "http://www.php.net/index.html", $a);
$host = $a[1];  //www.php.net 추출
echo $host;
echo '<br>';
preg_match('/[^.]+\.[^.]+$/', $host, $a);   //php.net 추출. $를 사용해서 끝에서부터 두 문자열이 추출됨.
echo "Domain name is : {$a[0]}";    
?>