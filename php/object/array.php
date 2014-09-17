<?php
$mem = memory_get_usage();
var_dump(memory_get_usage() - $mem);
$a = array();
var_dump(memory_get_usage() - $mem);
$a['name'] = 'jiaojie';
var_dump(memory_get_usage() - $mem);
$b = &$a;
var_dump(memory_get_usage() - $mem);
unset($a);
var_dump(memory_get_usage() - $mem);
var_dump($b);
