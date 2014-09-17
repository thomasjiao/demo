#! /usr/bin/php
<?php
echo PHP_INT_MAX."\n\n";

$a = 9223372036854775807;
$b = 9223372036854775808;

var_dump($a);
var_dump($b);

var_dump($b - $a);
