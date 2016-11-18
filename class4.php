<?php
//OOP Getter Setter

class Product{

	// Create Attribute
	private $id;
	private $name;
	private $price;

	// Create Method
	
	public function setid($value){
		$this->id=$value;
	}

	public function getid(){
		return $this->id;
	}

	public function setName($name){
		$this->name=$name;
	}

	public function getName(){
		return $this->name;
	}

	public function setPrice($price){
		$this->price=$price;
	}

	public function getPrice(){
		return $this->price;
	}

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
$pro->setid("100");
echo "รหัสสินค้า ".$pro->getid();
echo "<br>";
$pro->setName("ปลากระป๋อง");
echo "ชื่อสินค้า ".$pro->getName();
echo "<br>";
$pro->setPrice("5000");
echo "ราคาสินค้า ".$pro->getPrice();

?>