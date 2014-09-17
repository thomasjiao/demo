#! /usr/bin/php
<?php
function mutong($max, $array) {
    $arr = array_fill(0, $max, 0);
    for($i = 0; $i < count($array)-1; $i++) {
        $arr[$array[$i]]++;
    }

    $mutong = array();
    for($i = 0; $i < $max; $i++) {
        for($j = 1; $j <= $max; $j++) {
            $mutong[] = $i;
        }
    }
    return $mutong;
}

$count = array(5,2,1,51,23,90,33);
var_dump(mutong(90, $count));
