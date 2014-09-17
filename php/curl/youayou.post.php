#! /usr/bin/php5
<?php
/**
 * Curl版本
 * 使用方法：
 * $post_string = "app=request&version=beta";
 * request_by_curl('http://facebook.cn/restServer.php',$post_string);
 */
//$remote_server = 'www.ziroom.com/?_p=sign&_a=weakpassword_resetpassword';
//$post_string = 'step=1&password1=abcd1234&mobile=18010121330';

$remote_server = 'http://www.youayou.com/account/signup.php';
$post_string = urlencode('&email=test@example.com&username=test&password=test123&password2=test123&mobile=&city_id=66&subscribe=1&commit=%E6%B3%A8%E5%86%8C');
//$remote_server = 'http://s.ziroom.com/index.php?uri=directContract/getHouseInfoAjaxDirect&type=getServicingFees';
//$post_string  = 'startDate=2014-07-22&endDate=2015-01-21&houseCode=BJCY86078700_05&collectionCycleCode=3&deposit_type=1&month_price_bat=3369.4999999999995&is_validate=2&active_type=no&payment=3&rent_cycle_type=6&order_num_zrsd=';
echo $remote_server . "\n" . $post_string . "\n";
$data = request_by_curl($remote_server, $post_string);
echo $data . "\n";

function request_by_curl($remote_server, $post_string)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $remote_server);
//    curl_setopt($ch, CURLOPT_POSTFIELDS, 'mypost=' . $post_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($ch, CURLOPT_USERAGENT, "thomasjiao's CURL Example beta");
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
} 
