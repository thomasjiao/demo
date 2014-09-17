#! /usr/bin/php
<?php

$GLOBALS['abc'] = 123;

function test() {
    global $abc;
    unset($abc);
}

test();

var_dump(isset($GLOBAL['abc']));
