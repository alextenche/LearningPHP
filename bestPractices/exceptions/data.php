<?php

// ini_set("display_errors", "Off");
error_reporting(1);

class myData
{

  function getData()
  {
    if (!$file = fopen(__DIR__."/data.txt", "r")) {
    throw new Exception("unable to open file !");
  }

}

$data = new myData();

try {
  $data->getData();
} catch (Exception $e){
  echo $e->getMessage();
}

echo "end of file !";
