<?php

class Recipe
{
    private $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "AH";

    private $measurments = array(
      "tsp",
      "tbsp",
      "cup",
      "oz",
      "lb",
      "fl oz",
      "pint",
      "quart",
      "gallon"
    );

    public function setTitle($title)
    {
        $this->title = ucwords($title);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function displayRecipe()
    {
        return $this->title . " by " . $this->source;
    }

    public function addIngredient($item, $amount = null, $measure = null){
      if($amount != null && !is_float($amount) && !is_int($amount)){
        exit("Amount must be a float: " . gettype($amount) . " $amount given");
      }
      if($measure != null && !in_array(strtolower($measure), $this->measurments)){
        exit("Please enter a valid measurment: " . implode(", ", $this->measurments)gettype($amount) . " $amount given");
      }
      $this->ingredients[] = array(
        "item" => ucwords($item),
        "amount" => $amount,
        "measure" => strtolower($measure)
      );
    }
}

$recipe1 = new Recipe();
$recipe1->source = "Grandma Holligan";
$recipe1->setTitle("my first recipe");
$recipe1->addIngredient("egg", 1);

$recipe2 = new Recipe();
$recipe2->source = "Betty Crocker";
$recipe2->setTitle("my second recipe");

echo $recipe1->getTitle();
echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();
