<?php
require 'demo.class.php';
class demoTest extends PHPUnit_Framework_TestCase {
    public function testshowResult() {
        $foo = new demo('');
        $this->assertEquals(9, $foo->showResult(9));
    }
}
