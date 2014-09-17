#! /usr/bin/php5
<?php
$url = 'http://www.youayou.com/ajax/validator.php';
$data = file_get_contents($url);
echo $data;
