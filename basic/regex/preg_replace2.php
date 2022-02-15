<?php
$string = 'The quick brown fox jumped over the lazy dog.';
$patterns = array();
$patterns[0] = '/quick/';
$patterns[1] = '/brown/';
$patterns[2] = '/fox/';

$patterns[3] = '/lazy/';
$patterns[4] = '/dog/';
/**
 * 배열의 index가 2, 1, 0인 경우에도 결과 값은 순서대로 출력. 
 * index끼리 matching 되는 것이 아니라 배열이 생성된 순서대로 matching.
 */

$replace = array();
$replace[2] = 'slow';
$replace[1] = 'black';
$replace[0] = 'bear';

$replace[3] = 'blue';
$replace[4] = 'cat';

echo preg_replace($patterns, $replace, $string);
?>