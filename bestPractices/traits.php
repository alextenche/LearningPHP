<?php

trait Math
{
    public function add($item1, $item2)
    {
        return $item1 + $item2;
    }

    public function substract($item1, $item2)
    {
        return $item1 - $item2;
    }
}

trait Cart
{
    private $cart = array();

    public function add($item)
    {
        array_push($this->cart, $item);
    }

    public function getCart()
    {
        return $this->cart;
    }
}

class Product
{
    use Math, Cart {
        Cart::add insteadof Math;
    }
}

$prod = new Product();

echo $prod->add(array("id" => 123, "name" => "shirt")), "<br>";

print_r($prod->getCart());
echo "<br>";

print_r(class_uses($prod));

print_r(trait_exists("Math"));

