<?php
//require 'demo.class.php';
//$foo = new demo('');
//$ret = $foo->showResult(9);
//var_dump($ret);

require 'demoTest.class.php';
$foo = new demoTest();
$ret = $foo->testPushAndPop();

