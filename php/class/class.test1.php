#! /usr/bin/php5
<?php
    class Test {
        private $a1;
        private $a2;
        public $b1;
        public $b2;
//此构造函数好像必须为public
        public function __construct() {
            $this->a1 = 'private one';
            $this->a2 = 'private two';
            $this->b1 = 'public one';
            $this->b2 = 'public two';
        }

        public function showParas($name) {
            if(empty($this->$name)) {
                return 'error parametre!';
            }
            return $this->$name;
        }
    }



    $test = new Test();
    echo $test->showParas('a1') . "\n";
    echo $test->showParas('b1') . "\n";
    echo $test->showParas('a2') . "\n";
    echo $test->showParas('b2') . "\n";
    echo $test->showParas('b') . "\n";
