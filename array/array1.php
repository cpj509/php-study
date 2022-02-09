<?php
    $fruits = ["apple", "banana", "tomato"];
    for($i = 0; $i < count($fruits); $i++){
        echo $fruits[$i];
        echo '<br>';
    }
    echo '<br>';
    //php는 c, java랑 다르게 foreach가 역순.
    foreach($fruits as $fruit){
        echo ucfirst($fruit);
        echo '<br>';
    }
    echo '<br>';
    function get_fruit(){
        return ["tomato2", "tomato3"];
    }
    $fruits2 = get_fruit();
    echo $fruits2[1];
    echo get_fruit()[0];
?>