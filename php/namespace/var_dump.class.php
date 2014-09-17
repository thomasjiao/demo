<?php
namespace my3\dump;
class var_dump_sth{
    public $str;
    public function __construct($str) {
        $this->str = $str;
    }
    public function out() {
        var_dump($this->str);
    }
}
