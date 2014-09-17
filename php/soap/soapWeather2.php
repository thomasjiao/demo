#! /usr/bin/php5
<?php
$wsdl = "http://webservice.webxml.com.cn/WebServices/WeatherWS.asmx?wsdl";
$client = new SoapClient($wsdl);
//var_dump($client->__getFunctions());
//var_dump($client->__getTypes());
//var_dump($client->getRegionProvince());
//var_dump($client->getSupportCityString(array('theRegionCode' => '北京')));
$weather = $client->getWeather(array('theCityCode' => '3408'));
$weather = $weather->getWeatherResult->string;
echo "----------------\n";
echo $weather[1] . '   ' . $weather[3] . "\n";
echo $weather[4] . "\n";
echo "----------------\n";
echo $weather[7] . '   ' . $weather[8] . '   '. $weather[9]  .  "\n";
echo "----------------\n";
echo $weather[17] . '   ' . $weather[18] . '   '. $weather[19]  .  "\n";
echo "----------------\n";
echo $weather[22] . '   ' . $weather[23] . '   '. $weather[24]  .  "\n";
echo "----------------\n";
