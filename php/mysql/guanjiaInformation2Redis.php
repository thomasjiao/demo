#! /usr/bin/php
<?php
error_reporting(E_ALL);

$redis = new Redis();
//$redis->connect('redis.ziroom.com', '6379');
$redis->connect('127.0.0.1', '6379');

//$connection = mysql_connect('172.16.6.37', 'ziroom', 'fljt2lFVagi2jln');
$connection = mysql_connect('172.16.15.242', 'homelink', 'homelink');
mysql_set_charset('utf8', $connection);
$newziroom = mysql_select_db('newziroom', $connection);
$sql = 'select user_account,cn,mail,phone,ceo,zongjian,zhuguan,area_name,region_name,shop_name,extensionattribute2 as job_title,udate from t_cms_user where type=1 and is_del=0';
$result = mysql_query($sql, $connection);
if(!$result) {
    die('Mysql Query ERROR !'."\n");
}
while($user = mysql_fetch_assoc($result)) {
    try {
        $flag = $redis->setex('USER_'.$user['user_account'], 3600, json_encode($user));
//        var_dump($flag);
        //$redis->del('USER_'.$user['user_account']);
    } catch (RedisException $redis_exception) {
        die('Redis Error !' . "\n");
    } catch (Exception $exception) {
        die('PHP Error !' . "\n");
    }
}

