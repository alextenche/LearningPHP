<?php
/**
 * @file
 * Player class.
 */

/**
 * A player.
 */
class Player {
  /**
   * Player's hand.
   *
   * @var Deck
   */
  private $_hand;

  /**
   * Player's name.
   * 
   * @var string
   */
  private $_name;

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
   * Initialize a new player.
   *
   * @param string $name
   */
  public function __construct($name) {
    // Create random name.
    if (empty($name)) {
      $name = Player::randomName();
    }
    // Initialize empty hand.
    $this->_hand = new Deck(TRUE);
    // Set name.
    $this->_name = $name;
  }

  /**
   * Generate a random name.
   * 
   * @return string
   */
  public static function randomName() {
    return md5(str_shuffle(microtime()));
  }
}