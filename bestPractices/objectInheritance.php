<?php

class Product
{

    public $name = 'default_name';
    public $price = 0;
    public $desc = 'default_description';

    function __construct($name, $price, $desc)
    {
        $this->name = $name;
        $this->price = $price;
        $this->desc = $desc;
    }

    public function getInfo()
    {
        return "Product Name: " . $this->name;
    }
}

class Soda extends Product
{
    public $flavor;

    function __construct($name, $price, $desc, $flavor)
    {
        parent::__construct($name, $price, $desc);
        $this->flavor = $flavor;
    }

    public function getInfo()
    {
        return "Product Name: " . $this->name . " Flavor: " . $this->flavor;
    }
}

$shirt = new Product("Space Juice T-Shirt", 20, "Awesome Grey T-Shirt");
$soda = new Soda("Space Juice Soda", 2, "Thirst Mutilator", "Grape");

echo $soda->getInfo();