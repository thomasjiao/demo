#! /usr/bin/php5
<?php
/**
 * Curl版本
 * 使用方法：
 * $post_string = "app=request&version=beta";
 * request_by_curl('http://facebook.cn/restServer.php',$post_string);
 */
$remote_server = 'www.ziroom.com/?_p=sign&_a=weakpassword_resetpassword';
$post_string = 'step=1&password1=abcd1234&mobile=18010121330';

//$remote_server = 'http://jiaojie-localhost-www.ziroom.com/?_p=api&_a=transGuanjiaApi';
//$post_string  = '&account=20029037&key='.md5('20029037ziru');
//$post_string  = '&id=20083053&passwd=123456';
//echo $remote_server . "\n" . $post_string . "\n";
$data = request_by_curl($remote_server, $post_string);
echo $data . "\n";

function request_by_curl($remote_server, $post_string)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $remote_server);
    curl_setopt($ch, CURLOPT_POSTFIELDS,  $post_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($ch, CURLOPT_USERAGENT, "thomasjiao's CURL Example beta");
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
} 
