#! /usr/bin/php5
<?php
$ws = 'http://172.16.32.136:8080/AMI/services/RentBigSurrDateInter?wsdl';
$client =  new SoapClient($ws);
$in =  array(
    'houseId' => '200000020',
    'roomId' => '14063',
);
$in = json_encode($in);
$in = array(
    'jsonString' => $in
);
while(1) {
    $out = $client->getRentBigSurrDate($in);
    var_dump($out);
    echo date("h:i:s");
    sleep(1);
}
