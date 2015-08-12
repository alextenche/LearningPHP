<?php

$log = new Log(1);

// Render the log.
echo '<h3>Rendered</h3>';
echo $log->toHtml();

// Debugging.
echo '<h3>Debug</h3>';
echo debug($log);