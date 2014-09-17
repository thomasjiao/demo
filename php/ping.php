#! /usr/bin/php5
<?php
    $file = '172.16.15.225:/var/shared/OS/cautions';
    $v = file_exists($file);
    var_dump($v);
