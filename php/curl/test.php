#! /usr/bin/php5
<?php
  $ch = curl_init();
        $url = 'http://ams.ziroom.com/AMS/checkShortRentHouse?house_source_code=BJCY00527825&room_code=05';
  curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);

        $result = array();
        $result['result'] = curl_exec($ch);
        var_dump($result);
