<?php
class Product {
	protected $name;
	protected $price;
	protected $description;

	public function __construct($_name, $_price, $_description)
	{
		$this->name = $_name;
		$this->price = $_price;
		$this->description = $_description;
	}
}