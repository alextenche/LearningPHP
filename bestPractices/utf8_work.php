<?php

phpinfo();
exit;

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');

$string = "ăăîîșșțț..ă";

header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html>
  <head>
    <title>UTF-8 Test</title>
  </head>
</html>