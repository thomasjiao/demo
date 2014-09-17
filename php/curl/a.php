<?php
$id = '114712';
$url = 'http://172.16.4.193:8080/solr/room/select?q=id%3A' . $id . '&fl=room_name&wt=json&indent=true';
      $results = curl_post($url);
      var_dump($results);exit;