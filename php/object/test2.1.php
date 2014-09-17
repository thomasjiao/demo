<?php
var_dump(memory_get_usage());
//$a = new stdClass();
$a = array();
var_dump(memory_get_usage());
//$a->name = 'jiaojie';
$a['name'] = 'jiaojie';
var_dump(memory_get_usage());
$b = $a;
var_dump(memory_get_usage());
