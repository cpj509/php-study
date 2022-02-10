<?php
//외부 링크에 대한 file_get_contents
$homepage = file_get_contents('http://google.co.uk');
echo $homepage;