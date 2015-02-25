<?php

function get_list_view_html($product_id, $product){

    $output = "";
    $output .= '<li>';
    $output .= '<a href="shirt.php?id=' . $product_id . '">';
    $output .= '<img src="'. BASE_URL . $product["img"] . '" alt="' . $product["name"] . '">';
    $output .= '<p>View Details</p>';
    $output .= '</a>';
    $output .= '</li>';

    return $output;
}


$products = array();
$products[101] = array(
	"name" => "Logo Shirt, Red",
	"price" => 18,
	"img" => "img/shirts/shirt-101.jpg",
	"paypal" => "DLTEE4Y7PFZN2",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[102] = array(
	"name" => "Mike the Frog Shirt, Black",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20,
    "paypal" => "XUDKHPW4FY44U",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[103] = array(
    "name" => "Mike the Frog Shirt, Blue",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20,
    "paypal" => "TEKWCM89K5EZ6",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[104] = array(
    "name" => "Logo Shirt, Green",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18,
    "paypal" => "K3SLW44S6FBE2",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[105] = array(
    "name" => "Mike the Frog Shirt, Yellow",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25,
    "paypal" => "WHFAHGMBW6QNU",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[106] = array(
    "name" => "Logo Shirt, Gray",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 20,
    "paypal" => "ZUA7XNDC9L2HS",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[107] = array(
    "name" => "Logo Shirt, Turquoise",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 20,
    "paypal" => "NWD6H78TYBGQ2",
    "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[108] = array(
    "name" => "Logo Shirt, Orange",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 25,
    "paypal" => "6B39FGX2A7LBW",
    "sizes" => array("Large", "X-Large")
);