<?php 
class Item{
	private $id;
	private $name;
	private $price;
	private $img_url;
	private $description;

	public function __construct($name="",$price=0,$url="",$description=""){
		$this->name=$name;
		$this->price=$price;
		$this->img_url=$url;
		$this->description=$description;

	}

	public function arrayAdapter($row){
		$this->id=$row['id'];
		$this->name=$row['name'];
		$this->price=$row['price'];
		$this->img_url=$row['image_url'];
		$this->description=$row['description'];

		return $this;
	}
	
	public function getId(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name=$name;
		return $this;
	}

	public function getPrice(){
		return $this->price;
	}

	public function setPrice($price){
		$this->price=$price;
		return $this;
	}

	public function getImgUrl(){
		return $this->img_url;
	}

	public function setImgUrl($url){
		$this->img_url=$url;
		return $this;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description=$description;
		return $this;
	}
}




 ?>