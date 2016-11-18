<?php
//การสร้างคลาส
class Product{

	// Create Attribute
	public $id = 101;
	public $name = "Mama";
	public $price = 6;

	// Create Method
	public function showProduct(){
		echo $this->id;
	}
}

// Create Object
// One Pattern
$pro = new Product();

// Two Pattern
//$pro = new Product;

// เข้าถึง Method
$pro->showProduct();

?>