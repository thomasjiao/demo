<?php
$mem = memory_get_usage();
var_dump(memory_get_usage() - $mem);
$a = new stdClass();
var_dump(memory_get_usage() - $mem);
//$b = &$a;
//$b = $a;
$a->name = 'jiaojie';
//$b = clone $a;
var_dump(memory_get_usage() - $mem);
$b=clone $a;
//$a->name = 'jiaojie';
var_dump(memory_get_usage() - $mem);
unset($a);
var_dump(memory_get_usage() - $mem);
var_dump($b);
