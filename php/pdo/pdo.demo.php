#! /usr/bin/php5
<?php
    header('Content-type:text/html;charset=utf-8');
    $dsn = 'mysql:host=172.16.15.242;dbname=mode_price';
    $opt = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            );
    try {
        $db = new PDO($dsn, 'homelink', 'homelink', $opt);
    } catch (Exception $e) {
        die($e->getMessage());
    }
    $count = $db->query('SELECT * FROM t_test');
    print_r($count);
    print_r($count->fetchAll(PDO::FETCH_ASSOC));

//    $sql = "select * from t_cms_user where type= ? and is_del=0";
//    $statement = $db->prepare('select * from t_cms_user where type=? and is_del=0');
    //$statement->bindParam(1, 1);
//    $statement->execute(array(1));
//    $data = $statement->fetchAll();
//    var_dump($data);

    $sql = 'select * from t_test where';

