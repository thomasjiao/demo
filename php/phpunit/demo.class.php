<?php

class demo {
    public $i;
    public function __construct($p) {
        $this->i = is_int($p) ? TRUE : FALSE;
    }
    private function _getResult() {
        if($this->i) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function showResult($i) {
        if(!is_int($i)) {
            return FALSE;
        } else if($this->_getResult()) {
            return $i;
        } else {
            return -$i;
        }
    }
}
