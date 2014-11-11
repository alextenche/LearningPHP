<?php

class Person {

	function say_hello() {
		echo "Hello from inside the " . get_class($this). " class.<br />";
	}
	
	function hello() {
		$this->say_hello();
	}
	
}

$person = new Person();
$person->say_hello();
$person->hello();