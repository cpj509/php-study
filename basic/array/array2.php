<?php
    $li = array('a', 'b', 'c');
    array_push($li, 'd');   //배열 맨 뒤에 값 추가
    var_dump($li);
    echo '<br>';
    array_pop($li); //배열 마지막 값 제거
    var_dump($li);
    echo '<br>';
    array_shift($li);   //맨 앞 값 제거
    var_dump($li);
    echo '<br>';
    array_unshift($li, 'z');    //맨 앞에 값 추가
    var_dump($li);
    echo '<br>';
    sort($li);  //sort
    var_dump($li);
    echo '<br>';
    rsort($li); //reverse sort
    var_dump($li);  
?>