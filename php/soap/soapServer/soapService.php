<?php
    include_once('./soapFunction.php');
    
    
    $server = new SoapServer(null,array("location"=>"http://soap-localhost/soapService.php","uri"=>"soapFunction.php"));
    $server -> setClass("PersonInfo");
    $server -> handle();
