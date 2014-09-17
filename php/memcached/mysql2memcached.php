#! /usr/bin/php
<?php
//error_reporting(E_ERROR | E_NOTICE);

$mem = new Memcached();
$d = $mem->addServer('asdgasgasd.awsodg.com', '11211');
//var_dump($d);exit;

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
        $v = $mem->set('USER_'.$user['user_account'], json_encode($user), 3600);
        var_dump($v);
        //$redis->del('USER_'.$user['user_account']);
//    } catch (RedisException $redis_exception) {
//        die('Redis Error !' . "\n");
    } catch (Exception $exception) {
        die('PHP Error !' . "\n");
    }
}

