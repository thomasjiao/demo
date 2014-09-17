#! /usr/bin/php5
<?php
    echo 'error_log start !' . "\n";
    error_log(date("Y-m-d h:i:s").' content'."\n",3,'/tmp/log');
