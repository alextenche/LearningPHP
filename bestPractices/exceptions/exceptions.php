<?php

ini_set("display_errors", "Off");

function exception_error_handler($severity, $message, $file, $line)
{
  throw new ErrorException($message, 0, $severity, $file, $line);
}

set_error_handler("exception_error_handler");

function exception_handler($exception)
{
  echo "unchaught exception: " . $exception->getMessage();
}


set_exception_handler("exception_handler");

try {
  strpos();
} catch (Exception $e) {
  echo "error !" . $e->getMessage();
}

// echo 10/0;



echo "end of file";
