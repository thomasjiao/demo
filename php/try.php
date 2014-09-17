#! /usr/bin/php5
<?php
    $file = '/home/ojiaojie/works/FirePHPCore/fb.php';
    try {
        if(file_exists($file)) {
            require($file);
        } else {
            throw new Exception('File not exist!');
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
