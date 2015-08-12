<?php

$game = new Game();
foreach ($game->players as $player) {
  for ($i = 0; $i < 30; $i++) {
    $card = $player->hand->discard();
    $game->putCardInDiscard($card);
    foreach ($game->drawCards(1) as $card) {
      $player->hand->put($card);
    }
  }
}
echo $game->toHtml();