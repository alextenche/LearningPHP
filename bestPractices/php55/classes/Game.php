<?php
/**
 * @file
 * Game class.
 */

/**
 * Game logic, behaviors.
 */
class Game {

  /**
   * Active game deck.
   * @var Deck
   */
  private $_deck;

  /**
   * Discards.
   * @var Deck
   */
  private $_discard;

  /**
   * Players.
   * @var array
   */
  private $_players;

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
   * Initialize a new game.
   *
   * @param int $players_to_create Optional number of players; defaults to 2.
   * @param int $cards_per_player
   */
  public function __construct($players_to_create = 2, $cards_per_player = 5) {
    // Initialize a new Deck.
    $this->_deck = new Deck();
    $this->_deck->shuffle();
    // Initialize discard.
    $this->_discard = new Deck(TRUE);
    // Create players.
    for ($player_number = 0; $player_number < $players_to_create; $player_number++) {
      $this->_players[$player_number] = new Player('Player ' . $player_number);
    }
    // Populate player hands.
    $cards_dealt = 0;
    foreach ($this->drawCards($cards_per_player * $players_to_create) as $Card) {
      $this->_players[$cards_dealt++%$players_to_create]->hand->put($Card);
    }
  }

  /**
   * Draw cards from the deck.
   *
   * @param int $number_of_cards
   * @throws Exception If there are no cards to draw.
   */
  public function drawCards($number_of_cards) {
    if($number_of_cards != intval($number_of_cards)){
      throw new Exception('Cannot take partial cards.');
    }
    for($count = 0; $count < $number_of_cards; $count++ ){
      $cards = $this->_deck->getCards();
      if (empty($cards)) {
        $this->recycle();
      }
      //yield $this->_deck->draw();
    }
  }

  /**
   * Take cards from discard, put them back into the deck and shuffle.
   *
   * @throws Exception if deck isn't empty.
   */
  public function recycle() {
    $deck_cards = $this->_deck->getCards();
    if (empty($deck_cards)) {
      $this->_deck = $this->_discard;
      $this->_discard = new Deck(TRUE);
      $this->_deck->shuffle();
    }
    else {
      throw new Exception('Cannot recycle discard into deck when deck is not empty.');
    }
  }

  /**
   * Render a Game as HTML.
   * @return string
   */
  public function toHtml() {
    $html = '<table>';
    $html .= '<tr>';
    $html .= '<th>Deck';
    $html .= '<br/>' . count($this->_deck->getCards()) . ' card(s)';
    $html .= '</th>';
    $html .= '<td>' . $this->_deck->toHtml(array(
      'location' => 'deck',
      'back' => TRUE,
    )) . '&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<th>Dicard';
    $html .= '<br/>' . count($this->_discard->getCards()) . ' card(s)';
    $html .= '</th>';
    $html .= '<td>' . $this->_discard->toHtml(array(
      'location' => 'deck',
    )) . '&nbsp;</td>';
    $html .= '</tr>';
    foreach ($this->_players as $Player) {
      $html .= '<tr>';
      $html .= '<th>Player: ' . $Player->name;
      $html .= '<br/>' . count($Player->hand->getCards()) . ' card(s)';
      $html .= '</th>';
      $html .= '<td>' . $Player->hand->toHtml(array(
        'location' => 'hand',
      )) . '</td>';
      $html .= '</tr>';
    }
    $html .= '</table>';
    return $html;
  }

  public function putCardInDiscard(Card $Card) {
    $this->_discard->put($Card);
  }
}