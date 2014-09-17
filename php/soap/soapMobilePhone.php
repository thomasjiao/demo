#! /usr/bin/php5
<?php
    $wsdl = "http://www.webxml.com.cn/WebServices/MobileCodeWS.asmx?wsdl";

    $client = new SoapClient($wsdl);

    $onePhone = $client -> getMobileCodeInfo(
            array('mobileCode' => '13691361841')
            );
    print_r($onePhone);
    
//$ws = "http://www.webservicex.net/globalweather.asmx?wsdl";
//$ws = "http://172.16.5.114:9082/ZIRINTERFACE/services/AMSFuWu2ZiRuNet";
//$ws = "http://www.webservicemart.com/uszip.asmx?WSDL";

#$ws = 'http://172.16.31.76:8080/AMS2/services/ZiroomCustomerInterface?wsdl';
#$client =  new SoapClient($ws);
#//var_dump($client->__getFunctions());
#//var_dump($client->__getTypes());
#$in = json_encode(array('Hluser'=>'11'));
#$account = $client->getUserNameByHluser(array('jsonString'=>'{"Hluser":"jiaoj6"}'));
#var_dump($account);
