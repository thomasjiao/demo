#! /usr/bin/php
<?php
$str = isset($argv[1]) ? $argv[1] : '';
$ret = countStr($str);
empty($ret) ? print_r('  WARNING(' . date('Y-m-d H:i:s') . ') : Nothing input !' . "\n") : print_r($ret);


function countStr($str) {
    $str = strtolower($str);
    $num = strlen($str);
    $arr = array();
    for($i = 0; $i < $num; $i++) {
        $v = $str[$i];
        empty($arr[$v]) ? ($arr[$v] = 0) : '';
        $arr[$v]++;
    }
    ksort($arr);
    return $arr;
}
