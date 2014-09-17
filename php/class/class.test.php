#! /usr/bin/php5
<?php
    class Test {
        private $a1;
        private $a2;
        static protected $instance;
        public $b1;
        public $b2;
        private $table_names;
//此构造函数好像必须为public
        public function __construct() {
            $this->a1 = 'private one';
            $this->a2 = 'private two';
            $this->b1 = 'public one';
            $this->b2 = 'public two';
            $this->table_names = array('t_standard_price',
                                       't_standard_price_guanjia',
                                       't_standard_price_review',
                                       't_standard_price_log',
                                       't_standard_price_admin',
                                      );
        }

        public function getInstance($class = __CLASS__) {
            if(NULL === self::$instance ) {
                self::$instance = new $class();
            }
            return self::$instance;
        }
        public function showParas($name) {
            if(empty($this->$name)) {
                return 'error parametre!';
            }
            return $this->$name;
        }
        
        public function inArray($string) {
            if(!in_array($string, $this->table_names)) {
                return FALSE;
            }
            return TRUE;
        }
    }



    $test = new Test();
    $test2 = $test->getInstance();
#    echo $test->showParas('a1') . "\n";
#    echo $test->showParas('b1') . "\n";
#    echo $test->showParas('a2') . "\n";
#    echo $test->showParas('b2') . "\n";
#    echo $test->showParas('b') . "\n";
    echo $test2->inArray('t_standard_price_admin')?'TRUE':'FALSE';echo "\n";
