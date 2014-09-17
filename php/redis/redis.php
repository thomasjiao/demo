#! /usr/bin/php
<?php
error_reporting(E_ERROR);

$arr = getArgv();
var_dump($arr);
$redis = new Redis();
try {
    $redis->connect('localhost', '6379');
} catch (RedisException $redis_exception) {
    die('Cannot connect to redis server !');
} catch (Exception $exception) {
    die('PHP exception !');
}
try {
    //$redis->setex('test', 10, 'abcd');
    //$redis->set($arr['key'], $arr['value']);
    $result = $redis->rPush($arr['key'], $arr['value']);
    var_dump($result);
} catch (RedisException $redis_exception) {
    die('Redis Error !');
} catch (Exception $exception) {
    die('PHP exception !');
}
$test = $redis->get($arr['key']);
//$test = $redis->ttl('test');
var_dump($test);



function getArgv() {
    global $argv;
    $arr = array();
    $arr['key'] = $argv[1];
    $arr['value'] = $argv[2];
    return $arr;
}
