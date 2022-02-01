<?php
class User {
	protected $firstname;
	protected $lastname;
	protected $dateOfBirth;
	protected $creditCards = [];

	public function __construct($_firstname, $_lastname, $_dateOfBirth)
	{
		$this->firstname = $_firstname;
		$this->lastname = $_lastname;
		$this->dateOfBirth = $_dateOfBirth;
	}

	public function setCreditCards($_cc)
	{
		$this->creditCards[] = $_cc;
	}

}