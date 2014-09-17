<?php
namespace my2\printx;
class print_r_sth{
    public $str;
    public function __construct($str) {
        $this->str = $str;
    }
    public function out() {
        print_r($this->str);
    }
}
