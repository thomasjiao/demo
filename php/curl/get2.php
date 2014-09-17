#! /usr/bin/php
<?php
$url = 'http://jiaojie-localhost-www.ziroom.com/?_p=api&_a=transGuanjiaApi'.'&account=20029037&key='.md5('20029037ziru');
$data = file_get_contents($url);
var_dump($data);
