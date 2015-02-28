<?php

function get_list_view_html($product){

    $output = "";
    $output .= '<li>';
    $output .= '<a href="' . BASE_URL .'shirts/' . $product["sku"] . '/">';
    $output .= '<img src="'. BASE_URL . $product["img"] . '" alt="' . $product["name"] . '">';
    $output .= '<p>View Details</p>';
    $output .= '</a>';
    $output .= '</li>';

    return $output;
}

function get_products_recent(){
    $recent = array();
    $all = get_products_all();

	$total_products = count($all);
	$position = 0;
	
    foreach($all as $product){
        $position += 1;
					if($total_products - $position < 4){
            $recent[] = $product;
        }
    }
    return $recent;
}



function get_products_all(){
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

    foreach($products as $product_id => $product){
        $products[$product_id]["sku"] = $product_id;
    }

    return $products;
}