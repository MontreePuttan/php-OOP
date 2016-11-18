<?php
// นำ Object ไปใช้

class Product{

	// Create Attribute
	private $id;
	private $name;
	private $price;
	private $category;

	// Create Method
	function getId() {
            return $this->id;
        }

        function getName() {
            return $this->name;
        }

        function getPrice() {
            return $this->price;
        }

        function getCategory() {
            return $this->category;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setPrice($price) {
            $this->price = $price;
        }

        function setCategory($category) {
            $this->category = $category;
        }

        	
	public function showFullProduct(){
		$id = $this->id;
		$name = $this->name;
		$price = $this->price;

		echo "id : ".$id."<br>ชื่อสินค้า ".$name."<br>ราคา ".$price."ประเภท ".$this->category;
	}
}
$product1 = new Product();
$product1->setId("100");
$product1->setName("Name");
$product1->setPrice("20");
$product1->setCategory("Yoyo");

$product1->showFullProduct();


echo "<hr>";


?>