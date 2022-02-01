<?php
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/UserPremium.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Book.php";

$samuele = new UserPremium("Samuele", "Madrigali", "1991-08-23");
$newBook = new Book("Neuromante", 12.5, "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto voluptatem tempora repellendus dicta, veniam voluptates reiciendis possimus, unde harum voluptate odit itaque atque exercitationem optio! In fuga nemo animi placeat!");

try {
	$newBook->setNPages(266);
} catch(Exception $e) {
	echo $e->getMessage() . "<br>";
}

var_dump($newBook);