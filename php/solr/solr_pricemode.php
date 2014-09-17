#! /usr/bin/php5
<?php
    $options = array
    (
        'hostname' => '172.16.5.123',
        'port' => '9082',
        'path' => 'solr/house',
        'wt' => 'json',
    );
    
    $client = new SolrClient($options);
//    var_dump($client);
    $query = new SolrQuery();
//    $query->setQuery('room_code:BJFT86940599_02'."\n".'house_code:BJCY8579187234235');
    $query->setQuery('*:*');
    //$query->setQuery('room_type_code:308600000001'."\n".'house_code:BJCY85791877');
//    $query->setStart(0);
//    $query->setRows(50);
    //$query->addField('house_code:BJCY85791877');

    $query_response = $client->query($query);
//    var_dump($query_response);
    $response = $query_response->getResponse();
    //var_dump($response);
    foreach($response['response']['docs'] as $k => $v) {
        var_dump($v);
    }
//$updateResponse = $client->addDocument($doc);
//echo solr_get_version();
#    $doc = new SolrInputDocument();
#    $doc->addField('house_code', 'BJCY85791877');
#    $updateResponse = $client->addDocument($doc);

#    print_r($updateResponse->getResponse());
