<?php
require_once __DIR__ . "/User.php";

class UserPremium extends User {
	protected $discount;

	public function __construct($_firstname, $_lastname, $_dateOfBirth)
	{
		parent::__construct($_firstname, $_lastname, $_dateOfBirth);

		if( strtotime($this->dateOfBirth) <= strtotime('now -18 year') ) {
			$this->discount = 20;
		}
	}
}