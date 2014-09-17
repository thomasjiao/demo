#! /usr/bin/php5
<?php
/**
 * array_walk 和 foreach, for 的效率的比较。
 * 我们要测试的是foreach, for, 和 array_walk的效率的问题。 
 */

//产生一个10000的一个数组。
$max = 10000000;
$test_arr = range(0, $max);
$temp = 0;
//我们分别用三种方法测试求这些数加上1的值的时间。

// for 的方法
$t1 = microtime(true);
for ($i = 0; $i < $max; $i++) {
    $temp = $temp + 1;
}
$t2 = microtime(true);
$t = $t2 - $t1;
echo "就使用for, 没有对数组操作 花费: {$t}\n";

$t1 = microtime(true);
for ($i = 0; $i < $max; $i++) {
    $test_arr[$i] = $test_arr[$i] + 1;
}
$t2 = microtime(true);
$t = $t2 - $t1;
echo "使用for 并且直接对数组进行了操作 花费: {$t}\n";

$t1 = microtime(true);
for ($i = 0; $i < $max; $i++) {
    addOne($test_arr[$i]);
}
$t2 = microtime(true);
$t = $t2 - $t1;
echo "使用for 调用函数对数组操作 花费 : {$t}\n";

$t1 = microtime(true);
foreach ($test_arr as $k => &$v) {
    $temp = $temp + 1;
}
$t2 = microtime(true);
$t = $t2 - $t1;
echo "使用 foreach 没有对数组操作 花费 : {$t}\n";

$t1 = microtime(true);
foreach ($test_arr as $k => &$v) {
    $v = $v + 1;
}
$t2 = microtime(true);
$t = $t2 - $t1;
echo "使用 foreach 直接对数组操作 : {$t}\n";

$t1 = microtime(true);
foreach ($test_arr as $k => &$v) {
    addOne($v);
}
$t2 = microtime(true);
$t = $t2 - $t1;
echo "使用 foreach 调用函数对数组操作 : {$t}\n";

$t1 = microtime(true);
array_walk($test_arr, 'addOne');
$t2 = microtime(true);
$t = $t2 - $t1;
echo "使用 array_walk 花费 : {$t}\n";

function addOne(&$item) {
    $item = $item + 1;
}
?>

