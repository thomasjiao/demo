<?php
namespace my;
namespace my2;
require 'echo.class.php';
require 'print_r.class.php';
use my;
$test = new echox\echo_sth('asdg'."\n");
$test->out();
use my2;
$test2 = new printx\print_sth('asdg'."\n");
$test2->out();
