<?php
declare(strict_types = 1);
namespace Cooking;

class Recipe
{
    private $title;
    public $ingredients = [];
    public $instructions = [];
    public $yield;
    public $tags = [];
    public $source = "AH";

    private $measurements = [
        "tsp",
        "tbsp",
        "cup",
        "oz",
        "lb",
        "fl oz",
        "pint",
        "quart",
        "gallon"
    ];

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

    public function addIngredient($item, $amount = null, $measure = null)
    {
        if ($amount != null && !is_float($amount) && !is_int($amount)) {
            exit("Amount must be a float: " . gettype($amount) . " $amount given");
        }
        if ($measure != null && !in_array(strtolower($measure), $this->measurements)) {
            exit("Please enter a valid measurement: "
                . implode(", ", $this->measurements) . gettype($amount) . " $amount given");
        }
        $this->ingredients[] = [
            "item" => ucwords($item),
            "amount" => $amount,
            "measure" => strtolower($measure)
        ];
    }
}
