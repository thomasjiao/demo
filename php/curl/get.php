#! /usr/bin/php5
<?php
 $id = '114712';
//$url = 'http://172.16.4.193:8080/solr/room/select?q=id%3A' . $id . '&fl=room_name&wt=json&indent=true';
$url = 'http://ams.ziroom.com/AMS/checkShortRentHouse?house_source_code=BJCY00527825&room_code=05';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($data,1);
    print_r($data);
