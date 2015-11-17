<?php
class Book extends Product {
	protected $_isbn;

	public function __construct($type, $price, $isbn){
		Product::__construct($type, $price);
		$this->_type = $isbn;
	}

	public function getProductIsbn(){
		return $this->_isbn;
	}
}