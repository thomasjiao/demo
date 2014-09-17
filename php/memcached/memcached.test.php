#! /usr/bin/php
<?php
error_reporting(E_ERROR);

$mc = new Memcached();
$mc->addServer('localhost', '11211');

//$mc->add('foo', 'HELLO ', 1); //if exists, then return FALSE
//$mc->add('foo2', 'WORLD !', 1);
$mc->set('foo', 'HELLO ', time() + 5);  //if exiests, rewrite it
$mc->set('foo2', 'WORLD !', 1);
var_dump(time());
$flag = TRUE;
while($flag) {
    sleep(1);
    var_dump(strtotime(date('Y-m-d H:i:s')));
    $arr = $mc->get('foo');//, 'foo2');
    var_dump($arr);
    if(FALSE == $arr)
        $flag = FALSE;
}
