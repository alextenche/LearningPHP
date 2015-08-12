<?php
/**
 * @file
 * Log class.
 */

/**
 * Log parser.
 */
class Log {
  /**
   * Raw log rows.
   * @var array
   */
  private $_rows = [];

  /**
   * Game Identifier.
   * @var int
   */
  private $_game_id = 0;

  /**
   * Log constructor.
   *
   * @param int $game_id
   */
  public function __construct($game_id = 0) {
    $this->_game_id = (int) $game_id;
    if (!$this->_game_id) return;

    // Connect to the database.
    $database = new Database();
    $sql_query  = 'SELECT player_source_id, action, card, player_target_id ';
    $sql_query .= 'FROM log ';
    $sql_query .= 'WHERE game_id = ?';
    
    $statement = $database->pdo->prepare($sql_query);
    $statement->execute([$game_id]);
    if ($statement) {     
      $statement->setFetchMode(PDO::FETCH_NUM);
      $this->_rows = $statement->fetchAll();
    }
  }

  /**
   * Magic get.
   *
   * @param string $name
   * @return mixed
   */
  public function __get($name) {
    // Attempt to return a protected property by name.
    $protected_property_name = '_' . $name;
    if (property_exists($this, $protected_property_name)) {
      return $this->$protected_property_name;
    }

    // Unable to access property; trigger error.
    $trace = debug_backtrace();
    trigger_error(
      'Undefined property via __get(): ' . $name .
      ' in ' . $trace[0]['file'] .
      ' on line ' . $trace[0]['line'],
      E_USER_NOTICE);
    return NULL;
  }

  /**
   * Render the current log as HTML.
   */
  public function toHtml() {
    $ret_val = '<ol class="log">';
    // Specifying row indexes.
    foreach ($this->_rows as $row) {
      $ret_val .= '<li>' . $this->rowToString($row[0], $row[1], $row[2], $row[3]) . '</li>';
    }
    $ret_val .= '</ol>';
    return $ret_val;
  }

  /**
   * Render a row as a human readable string.
   *
   * @param string $player_name
   * @param string $action
   * @param string $card_text
   * @param string $target_player_name
   * @return string
   */
  public function rowToString($player_name, $action, $card_text, $target_player_name) {
    $ret_val = 'Player ' . htmlspecialchars($player_name) . ' ';
    switch ($action) {
      case 'draw':{
        $ret_val .= 'drew a ' . $card_text . '.';
        break;
      }
      case 'pass':{
        $ret_val .= 'passed a ' . $card_text . ' to ';
        $ret_val .= htmlspecialchars($target_player_name) . '.';
        break;
      }
      case 'fold':{
        $ret_val .= 'folded and gave up.';
        break;
      }
      default:{
        $ret_val .= 'did something that I cannot comprehend.';
        break;
      }
    }
    return $ret_val;
  }

  /**
   * Generate a random Log entry.
   * @return array
   */
  public static function generate() {
    return array(
      'game_id' => rand(1, 4),
      'player_source_id' => rand(1, 4),
      'action' => '',
      'card' => (string) Card::randomCard(),
      'player_target_id' => rand(1, 4),
    );
  }
}