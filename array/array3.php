<?php
//associative array. 연관배열.
$li = [];
$li['a'] = 10;
$li['b'] = 20;
$li['c'] = 30;
var_dump($li);
echo '<br>';
$li2 = array('c' => 40, 'd' => 50, 'e' => 60);
foreach($li2 as $key => $value){
    echo "key : {$key} and value : {$value}<br>";
}
?>