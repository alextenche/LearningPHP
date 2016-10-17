<?php

// report simple runnsing errors
// error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL);

// make sure they're on screen
ini_set('display_errors', 1);

// do some errors

// notice
$nope = 0;
var_dump(5 + $nope);

// warnings
$warrior = new stdClass();
$warrior->name = "Blade Daywalker";

// strict
class Example
{
    public static function sample() {}

    public static function nope() {}
}

Example::sample();

// error

Example::nope();

echo "we'll never get here";
