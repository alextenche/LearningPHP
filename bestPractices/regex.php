<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 06.08.2015
 * Time: 20:52
 */

$re = "/[0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]-[0-9][0-9][0-9]/";

$str = "012-3456-789";
if (preg_match($re, $str, $matches) == 1){
    echo "matched string", "<br>";
} else {
    echo "nope", "<br>";
}

$str1 = "312-4444-333";
if (preg_match($re, $str1, $matches) == 1){
    echo "matched string", "<br>";
} else {
    echo "nope", "<br>";
}