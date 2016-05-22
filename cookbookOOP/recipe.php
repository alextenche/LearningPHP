<?php

class Recipe{
  public $title;
  public $ingredients = array();
  public $instructions = array();
  public $yield;
  public $tag = array();
  public $source = "Alexone";

  public function displayRecipe(){
    return $this->title . " by " . $this->source;
  }
}

$recipe1 = new Recipe();
$recipe1->title = "Pie";
echo $recipe1->displayRecipe();
