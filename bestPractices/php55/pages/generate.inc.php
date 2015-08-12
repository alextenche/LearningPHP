<?php

// Connect to the database.
$database = new Database();
$database->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Lock the tables...
$database->pdo->exec('LOCK TABLES log WRITE');
echo renderMsg('success', 'log tables locked.');

// Generate 100 log entries.
try {
  $database->pdo->beginTransaction();

  echo renderMsg('info', 'Preparing statement...');

  // Prepare statement.
  $sql_query = 'INSERT INTO log ';
  $sql_query .= '(game_id, player_source_id, action, card, player_target_id) ';
  $sql_query .= 'VALUES (:game_id, :player_source_id, :action, :card, :player_target_id) ';
  $stmt = $database->pdo->prepare($sql_query);

  echo renderMsg('info', 'Generating...');
  for ($i = 1; $i < 100; ++$i) {
    $log = Log::generate();
    $stmt->bindParam(':game_id', $log['game_id']);
    $stmt->bindParam(':player_source_id', $log['player_source_id']);
    $stmt->bindParam(':action', $log['action']);
    $stmt->bindParam(':card', $log['card']);
    $stmt->bindParam(':player_target_id', $log['player_target_id']);
    $stmt->execute();
  }

  $database->pdo->commit();
  // Unlock the tables.
  $database->pdo->exec('UNLOCK TABLES');
  echo renderMsg('success', 'log tables unlocked.');
}
catch (Exception $e) {
  echo renderMsg('error', 'Rolled back transaction.');
  $database->pdo->rollBack();
  // Unlock the tables.
  $database->pdo->exec('UNLOCK TABLES');
  echo renderMsg('success', 'log tables unlocked.');
}