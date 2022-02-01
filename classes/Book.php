<?php
require_once __DIR__ . "/Product.php";

class Book extends Product {
	protected $nPages;

	public function setNPages($_nPages)
	{
		if( !is_int($_nPages) ) {
			throw new Exception("il valore passato non è un numero");
		}
		$this->nPages = $_nPages;
	}
}