<?php

class JsonProduct implements JsonSerializable
{
    public $prodId;
    public $prodName;
    public $price;

    public function jsonSerialize()
    {
        return array("prodId" => $this->prodId,
                     "prodName" => $this->prodName,
                     "price" => $this->price,
                     "salePrice" => $this->price * .75);
    }
}

$prod = new JsonProduct();
$prod->prodId = 12;
$prod->prodName = "wood desk";
$prod->price = "1500";

print json_encode($prod, JSON_PRETTY_PRINT);

$nums = array(12,423,6,34,7,345,672);
$numIterator = new ArrayIterator($nums);

function filter_small($current, $key,$iterator)
{
    return ($current > 100);
}

$small_nums = new CallbackFilterIterator($numIterator, "filter_small");

foreach ($small_nums as $num)
{
    echo "<br>", $num;
}