<?php
/**
 * @file
 * Playing card class.
 */

/**
 * Playing card.
 */
class Card {
  /**
   * The rank of a card.
   *
   * @var string
   */
  private $_rank;

  /**
   * The suit of a card.
   *
   * @var string
   */
  private $_suit;

  /**
   * Valid ranks of a card. '0' is 10, 'U' is Joker, as "Joker" is believed to
   * be a mispronunciation of "Juker".
   *
   * @var array
   */
  public static $ranks = array(
    '2',
    '3',
    '4',
    '5',
    '6',
    '7',
    '8',
    '9',
    '0',
    'J',
    'Q',
    'K',
    'A',
    'U',
  );

  /**
   * Valid suits for a card.
   *
   * @var array
   */
  public static $suits = array(
    'S' => 'spades',
    'H' => 'hearts',
    'D' => 'diams',
    'C' => 'clubs',
  );

  /**
   * Card constructor.
   *
   * @param string $rank
   * @param string $suit
   * @throws Exception if invalid rank or suit.
   */
  public function __construct($rank, $suit = NULL) {
    if (!$this->isValidRank($rank)) {
      throw new Exception('Invalid card rank; cannot construct card.');
    }    
    if (('U' != $rank) && !$this->isValidSuit($suit)) {
      throw new Exception('Invalid card suit; cannot construct card.');
    }
    $this->_rank = $rank;
    $this->_suit = $suit;
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
   * Render a card as a plain-text string.
   * @return string
   */
  public function __toString() {
    return $this->rank . $this->suit;
  }

  /**
   * Render a card as HTML using Anika Henke's CSS Playing Cards.
   * 
   * @param boolean $selectable
   * @return string
   */
  public function toHtml($options = array()) {
    $options = $options + array(
      'selectable' => FALSE,
      'location' => 'table',
      'render' => '',
      'fourColours' => FALSE,
      'rotateHand' => FALSE,
      'back' => FALSE,
    );
    // Deal with '0' to '10' conversion.
    $rank_normalized = '0' == $this->rank ? '10' : $this->rank;

    // Form element.
    if ($options['selectable']) {
      $label = 'c-' . (string) $this;
      $html = '<label for="' . $label . '"';
    }
    else {
      $html = '<div';
    }
    $html .= ' class="card';
    if ($options['back']) {
      $html .= ' back';
    }
    else {
      if ('U' == $this->rank) {
        $html .= ' joker';
      }
      else {
        $html .= ' rank-' . $rank_normalized;
        $html .= ' ' . Card::$suits[$this->suit];
      }
    }
    $html .= '">';

    // Contents
    if (!$options['back']) {
      // Joker.
      if ('U' == $this->rank) {
        $html .= '<span class="rank">-</span>';
        $html .= '<span class="suit">Joker</span>';
      }
      // All other cards.
      else {
        $html .= '<span class="rank">' . $rank_normalized . '</span>';
        $html .= '<span class="suit">';
        // HTML.
        $html .= '&' . Card::$suits[$this->suit] . ';';
        $html .= '</span>';
      }
    }

    // Form element.
    if ($options['selectable']) {
      $html .= '<input type="checkbox" name="c-2D' . $label . '" id="' . $label . '" value="select"/>';
      $html .= '</label>';
    }
    else {
      $html .= '</div>';
    }

    // Return fully rendered card.
    return $html;
  }

  /**
   * Validate a card suit.
   *
   * @param string $suit
   * @return boolean
   */
  public static function isValidSuit($suit) {
    return in_array(strtoupper($suit), array_keys(Card::$suits));
  }

  /**
   * Validate a card rank.
   *
   * @param string $rank
   * @return boolean
   */
  public static function isValidRank($rank) {
    return in_array(strtoupper($rank), Card::$ranks);
  }

  /**
   * Validate a card.
   * 
   * @return boolean
   */
  public function isValidCard() {
    if ('U' == $this->rank && is_numeric($this->suit)) {
      return TRUE;
    }
    return ($this->isValidSuit($this->suit) && $this->isValidRank($this->rank));
  }

  /**
   * Generate a random card.
   * 
   * @return Card
   */
  public static function randomCard() {
    try {
      $Card = new Card(array_rand(Card::$ranks), array_rand(Card::$suits));
    }
    catch (Exception $e) {
      return Card::randomCard();
    }
    return $Card;
  }
}