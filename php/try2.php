#! /usr/bin/php5
<?php
    $file = '/home/ojiaojie/works/FirePHPCore/fb.php';
    try {
        include($file);
        
    } catch (Exception $e) {
        echo $e->getMessage();
    }
