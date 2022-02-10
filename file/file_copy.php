<?php
    $file = 'readme.txt';
    $newfile = 'example.txt.bak';

    if(!copy($file, $newfile)){
        echo "file copy fail!!!!";
    }else{
        echo "Success!!!";
    }