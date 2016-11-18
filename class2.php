<?php
//เมธอดและการเข้าถึง

class Product{

	// Create Attribute
	public $id = 101;
	public $name = "Mama";
	public $price = 6;

	// Create Method
	public function showProduct(){
		echo $this->id;
	}

	public function showFullProduct(){
		$id = $this->id;
		$name = $this->name;
		$price = $this->price;

		echo "id : ".$id."<br>ชื่อสินค้า ".$name."<br>ราคา ".$price;
	}
}

// Create Object
// One Pattern
$pro = new Product();

// Two Pattern
//$pro = new Product;

// เข้าถึง Method

$pro->showFullProduct();

?>