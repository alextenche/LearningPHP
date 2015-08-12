<?php
/**
 * @file
 * Standard 52-card deck class.
 */

/**
 * Standard 52-card deck.
 */
class Deck {
  /**
   * Available cards to draw.
   *
   * @var array
   */
  private $_cards = array();

  /**
   * Valid locations to render a deck.
   *
   * @var array
   */
  public static $locations = array(
    'table',
    'deck',
    'hand',
  );

  /**
   * Get cards.
   * 
   * @return array
   */
  public function getCards() {
    return $this->_cards;
  }

  /**
   * Initialize a new deck of cards.
   *
   * @param boolean $empty Optional; if empty, put no cards in the deck.
   * @param int $jokers Optional number of Jokers in a deck; defaults to 0.
   */
  public function __construct($empty = FALSE, $jokers = 0) {
    // If an empty deck, no further action required.
    if ($empty) return;

    // Create deck.
    $count_jokers = 0;
    foreach (Card::$ranks as $rank) {
      if ('U' != $rank) {
        foreach (array_keys(Card::$suits) as $suit) {
          $Card = new Card($rank, $suit);
          $this->_cards[] = $Card;
        }
      }
      else {
        for ($count_jokers = 1; $count_jokers <= $jokers; $count_jokers++) {
          $this->_cards[] = new Card($rank, $count_jokers);
        }
      }
    }
  }

  /**
   * Remove a card from the deck.
   *
   * @return Card The next card in the deck.
   */
  public function draw() {
    if (empty($this->_cards)) {
      throw new Exception('No cards to draw.');
    }
    return array_pop($this->_cards);
  }

  /**
   * Discard a card from the deck.
   *
   * @param Card $card Optional
   */
  public function discard(Card $Card = NULL) {
    if (!$Card) {
      $index = array_rand($this->_cards);
      $Card = $this->_cards[$index];
      unset($this->_cards[$index]);
    }
    else {
      $location = $this->find($Card);
      unset($this->_cards[$location]);
    }
    return $Card;
  }

  /**
   * Shuffle a deck of cards.
   */
  public function shuffle() {
    shuffle($this->_cards);
  }

  /**
   * Render the deck as a string for debugging.
   *
   * @return string
   */
  public function __toString() {
    return implode(' ', $this->_cards);
  }

  /**
   * Render the deck as HTML for debugging.
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
    // Validate location.
    if (!in_array($options['location'], Deck::$locations)) {
      throw new Exception('Invalid location for deck contents.');
    }
    // Validate rendering options.
    if ($options['render'] && !in_array($options['render'], array(
      'faceImages',
      'simpleCards',
      'inText',
    ))) {
      throw new Exception('Invalid rendering option.');
    }
    $cards = array();
    // Deal with over 32 back cards gracefully (limit from CSS library).
    if ($options['back'] && count($this->_cards) > 32) {
      for ($i = 0; $i < 32; $i++) {
        // Nothing but Jokers; they're not shown or stored.
        $card = new Card('U', $i);
        $cards[] = $card->toHtml($options);
      }
    }
    else {
      foreach ($this->_cards as $Card) {
        $cards[] = $Card->toHtml($options);
      }
    }
    $html = '<div class="playingCards';
    if ($options['rotateHand']) {
      $html .= ' rotateHand';
    }
    if ($options['fourColours']) {
      $html .= ' fourColours';
    }
    if ($options['render']) {
      $html .= ' ' . $options['render'];
    }
    $html .= '">';
    $html .= '<ul class="' . $options['location'] . '">';
    $html .= '<li>'  . implode('</li><li>', $cards) . '</li>';
    $html .= '</ul>';
    $html .= '</div>';
    return $html;
  }

  /**
   * Put a card on the top of the deck.
   * 
   * @param Card $Card
   */
  public function put(Card $Card) {
    $this->_cards[] = $Card;
  }

  /**
   * Determine the location of a card with the deck.
   * 
   * @param Card $Card
   * @return string
   */
  public function find(Card $Card) {
    return array_search((string) $Card, $this->_cards);
  }
}