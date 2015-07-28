<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 27.07.2015
 * Time: 14:54
 */
echo "hello";

ini_set('display_errors', 1);

include './src/HTTP/Client.php';
include './src/Twitter/Client.php';

var_dump(new HTTP\Client);
var_dump(new Twitter\Client);