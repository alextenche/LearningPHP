<?php

// Connect to the database.
$database = new Database();
// Check to see if the demo content exists.
$sql_query = 'SELECT game_id ';
$sql_query .= 'FROM game_security ';
$sql_query .= 'WHERE game_id = 1 ';
$result = $database->pdo->query($sql_query);
if ($result && ($row = $result->fetch())) {
  echo renderMsg('success', [
    'heading' => 'Database content:',
    'body' => 'Exists',
  ]);
}
else {
  echo renderMsg('error', [
    'heading' => 'Database content:',
    'body' => 'Does not exist; please import php55.sql',
  ]);
}

// Check PHP settings.
$settings_to_check = [
  'date.timezone',
  'pdo_mysql.default_socket',
  'mysql.default_socket',
  'mysqli.default_socket',
  'session.save_path',
  'error_log',
  'opcache.enable',
  'opcache.enable_cli',
];
foreach ($settings_to_check as $setting) {
  $setting_value = ini_get($setting);
  echo renderMsg(($setting_value ? 'info' : 'warn'), [
    'heading' => 'php.ini - ' . $setting . ':',
    'body' => '<tt>' . ($setting_value ? $setting_value : '<i>unset</i>') . '</tt>',
  ]);
}