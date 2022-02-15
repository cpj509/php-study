<?php
for($i = 0; $i < 10; $i++){
    if($i === 4)
        continue;
    if($i === 7){
        break;
    }
    echo "hello ".($i*2)."<br>";
    echo "hi {$i}<br>";
    for($j = 0; $j < 2; $j++){
        echo "nice to meet you{$i}{$j}";
    }
    echo "<br>";
}
?>
