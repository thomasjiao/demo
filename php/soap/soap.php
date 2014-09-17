#! /usr/bin/php5
<?php
ini_set('default_socket_timeout', 180);
//$ws = 'http://172.16.31.76:8080/AMS2/services/ZiroomCustomerInterface?wsdl';
//$ws = 'http://172.16.31.17:8080/AMS2/services/AMSFundsInterface?wsdl';
$ws = 'http://172.16.5.115:9080/AMI/services/AMSFundsInterface?wsdl';
$client =  new SoapClient($ws);
//var_dump($client->__getFunctions());
//var_dump($client->__getTypes());
//$username = 'hand';
#$in = array(
#       'factPaymentTime' => '2014-05-09', 
#       'factPaymentPrice' => '8888', 
#       'verycode' => 'SKD20140202ADGDC', 
#       'cuid' => '132342', 
#       'cname' => 'test', 
#       'refnum' => 'asdgasdgasg', 
#       'serialNo' => 'AGGASD', 
#       'creatorName' => 'TEST', 
#       'time' => '2014-08-08 22:22:22', 
#       'currentPayType' => '3', 
#       'sign_info' => '235235235235263465475475474', 
#       'pic_path' => 'http://ziroom.com/1.jpg', 
#        );
$in = array('Ptype' => 'POS机', 'Ctype' => '');
$in = json_encode($in);
var_dump($in);
//$in = json_encode(array('Hluser'=>$username));
$in = array(
        'jsonString' => $in
    );
//$account = $client->getUserNameByHluser($in);
//var_dump($account);
//$account = json_decode($account->getUserNameByHluserReturn)->userName;
//$out = $client->addOffLineFunds($in);
#$i = 1;
#while(1) {
#    sleep(1);
    try{
        $out = $client->bankInfoToZRNet($in);
    } catch (Exception $exec) {
        echo date('Y-m-d H:i:s').' ENDS'."\n";
        die;
    }
#    $i++;
#}
//$account = $account->userName;
//echo $account . "\n";
//var_dump(json_decode($out->addOffLineFundsReturn,1));echo "\n";
var_dump($out);echo "\n";
