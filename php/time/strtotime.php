<?php
$timestamp = strtotime(date('YmdHis'));
$md =  md5($timestamp);
var_dump($md);
