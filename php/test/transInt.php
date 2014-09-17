<?php
if(!isset($argv[1])) {
    exit('Try again with your parametre !'."\n");
}
if(1 == $argv[1]) {
    $a = (int)'123';
} else if (2 == $argv[1]) {
    $a = intval('123');
} else {
    echo 'Error !' . "\n";
}

