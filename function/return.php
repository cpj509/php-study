<?php
    $i = 100;
    function get_member1(){
        return 'a';
    }
    function get_member2($a){   //use argument
        return $a;
    }
    function plus($a, $b){
        return $a + $b;
    }
    function basic_value($a = 20){
        return $a;
    }
    function global_test(){
        global $i;
        $i = 200;
    }
    echo get_member1();
    echo ', ';
    echo get_member2(2);
    echo ', ';
    echo plus(1, 2);
    echo '<br>';
    echo basic_value();
    echo ', ';
    echo basic_value(30);
    echo '<br>';
    // 전역변수 변경 테스트
    echo $i;
    echo ', ';
    global_test();
    echo $i;
?>