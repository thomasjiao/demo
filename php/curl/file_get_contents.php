#! /usr/bin/php5
<?php
    $data = file_get_contents('http://www.weather.com.cn/data/cityinfo/101010100.html');
    $data = json_decode($data)->weatherinfo;   
    $weather['city_name'] = $data->city;
    $weather['high_temp'] = $data->temp2;
    $weather['low_temp'] = $data->temp1;
    $weather['weather_desc'] = $data->weather;
    $weather['last_modify_time'] = $data->ptime;
    echo date("Y-m-d H:i:s") . ' |City: ' . $weather['city_name'] . ' |Weather: ' . $weather['weather_desc'] . ' |Hign: ' . $weather['high_temp'] . ' |Low: ' . $weather['low_temp'] . ' |Last Update: ' . $weather['last_modify_time'];
    echo "\n";
