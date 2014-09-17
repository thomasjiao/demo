#! /usr/bin/php
<?php
class test {
    public $demo;

    public function __construct() {
    }

    public function get($foo) {
        echo $this->$foo;
        echo "\n";
    }

    public function set($foo, $value) {
        $this->$foo = $value;
    }
}

$instance = new test();
//$instance->setb();
//$instance->get('b');
//$instance->get('a');
//$instance->getb();
$instance->set('c', 'char');
$instance->get('c');

