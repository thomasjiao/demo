#! /usr/bin/php
<?php

$times = 100001;

$i = 1;
$array = array();
while($i < $times) {
    array_push($array, $i++);
}
echo count($array) . "\n";
unset($i);



echo "------------------\n";

echo 'FOR 读取100000做加法' . "\n";
$start = microtime(1);
for($i = 1; $i < 100000; $i++) {
    $array[$i];
}
$end = microtime(1);
echo $end - $start . "\n";


$i = 1;
$array = array();
while($i < $times) {
    array_push($array, $i++);
}
unset($i);




echo "------------------\n";
$i = 1;
echo 'WHILE 读取100000做加法' . "\n";
$start = microtime(1);
while($i < 100000) {
    $array[$i];
    $i++;
}
$end = microtime(1);
echo $end - $start . "\n";


$i = 1;
$array = array();
while($i < $times) {
    array_push($array, $i++);
}
unset($i);




echo "------------------\n";
echo 'WHILE LIST EACH 读取100000做加法' . "\n";
$start = microtime(1);
while(list($k, $v) = each($array)) {
    $v;
}
$end = microtime(1);
echo $end - $start . "\n";





$i = 1;
$array = array();
while($i < $times) {
    array_push($array, $i++);
}
unset($i);





echo "------------------\n";



echo 'FOREACH 读取100000做加法' . "\n";
$start = microtime(1);
foreach($array as $v) {
    $v;
}
$end = microtime(1);
echo $end - $start . "\n";


echo "------------------\n";

