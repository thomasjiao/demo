#! /usr/bin/php
<?php

$redis = new Redis();
$redis->connect('localhost', '6379');

$user = $redis->get('USER_10003412');
$user = json_decode($user, 1);
var_dump($user);
