<?php

class Store {
	public $clothes;
	public $jewelery;
	public $food;


public function __construct($clothes, $jewelery, $food) {
	$this->clothes = $clothes;
	$this->jewelery = $jewelery;
	$this->food = $food;
   }

function Greeting() {
	return "Hello this is my store and it has " . $this->food;

   }
}

$Kathlyn = new Store("jeans", "diamonds" , "chicken");
 echo $Kathlyn->Greeting();


?>