<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 02.08.2015
 * Time: 12:01
 */

// send error to output
ini_set('display_errors', 1);

set_error_handler(function($errno, $errstr, $errfile, $errline){
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

try {
    // read a file
    $handle = fopen('nope.txt.', 'r');
} catch(ErrorException $e){
    echo "<p> Can't find the file. </p>";
}
echo "<p> Do something else. </p>";