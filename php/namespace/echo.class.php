<?php
namespace my\echox;
class echo_sth{
    public $str;
    public function __construct($str) {
        $this->str = $str;
    }
    public function out() {
        echo $this->str;
    }
}
$demo = new echo_sth('test');
$demo->out();
