<?php
class Product {
	protected $_type;
	protected $_price;

	public function __construct($type, $price) {
		$this->_type = $type;
		$this->_price = $price;
	}

	public function getProductType() {
		return $this->_type;
	}

	public function getProductPrice() {
		return $this->_price;
	}
}
