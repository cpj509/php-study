<?php
$patterns = array('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/', '/^\s*{(\w+)}\s*=/');
$replace = array('\3/\4/\1\2', '$\1 =');
//$StartDate = 5/27/1999라는 형식으로 치환.
echo preg_replace($patterns, $replace, '{StartDate} = 1999-5-27');
?>