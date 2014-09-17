#! /usr/bin/php5
<?php
//    include 'solr_config.php';
#    $options = array
#    (
#        'hostname' => SOLR_SERVER_HOSTNAME,
#        'login'    => SOLR_SERVER_USERNAME,
#        'password' => SOLR_SERVER_PASSWORD,
#        'port'     => SOLR_SERVER_PORT,
#    );
    $options = array
    (
        //'hostname' => '172.16.4.193',
        //'port' => '8080',
        'hostname' => '172.16.5.123',
        'port' => '9082',
        'path' => 'solr/house',
        'wt' => 'json',
    );
    
    $client = new SolrClient($options);
    $query = new SolrQuery();
    $query->setQuery('district_id:23008613');
    //$query->setQuery('room_code:BJFT86940599_02');
    //$query->setQuery('room_type_code:308600000001'."\n".'house_code:BJCY85791877');
    $query->setStart(0);
    $query->setRows(50);
    $query->addField('resblock_name');

    $query_response = $client->query($query);
    var_dump($query_response);
    $response = $query_response->getResponse();
    print_r($response);
//$updateResponse = $client->addDocument($doc);
//echo solr_get_version();
#    $doc = new SolrInputDocument();
#    $doc->addField('house_code', 'BJCY85791877');
#    $updateResponse = $client->addDocument($doc);

#    print_r($updateResponse->getResponse());
