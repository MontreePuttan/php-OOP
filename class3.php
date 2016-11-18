<?php
//Private

class Product{

	// Create Attribute
	private $id = 101;
	private $name = "Mama";
	private $price = 6;

	// Create Method
	public function showProduct(){
		echo $this->id;
	}

	private function showFullProduct(){
		$id = $this->id;
		$name = $this->name;
		$price = $this->price;

		echo "id : ".$id."<br>ชื่อสินค้า ".$name."<br>ราคา ".$price;
	}
}

$pro = new Product;
$pro->showFullProduct();

?>