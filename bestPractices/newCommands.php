<?php

header_register_callback(rewriteHeaders());

session_start();
echo "session status: ", session_status(), "<br>";

echo http_response_code(), "<br>";
http_response_code(404);
echo http_response_code(), "<br>";

var_dump(headers_list());

function rewriteHeaders()
{
    header_remove("Pragma");
    header("X-Author: Alex Tenche");
}

$hex = hex2bin("57656c636f6d6520746f2050485020352e34");
print_r($hex);
