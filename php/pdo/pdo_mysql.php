#! /usr/bin/php
<?php
    try {
//        $db = new mysqli('172.16.15.242','homelink','homelink','mode_price');
        $db = new PDO('mysql:host=172.16.15.242;dbname=mode_price', 'homelink', 'homelink');
    } catch (Exception $exce) {
        die($exce->getMessage());
    }

//    foreach($db->query('select * from t_test') as $row) {
        //print_r($row);
//    }

//    $rs = $db->query('select * from t_test');
//    $arr = $rs->fetchAll();
//    print_r($arr);

    $rs = $db->query('insert into t_test (descp,user) values ("hehe","wangming")');
    print_r($rs);
