<?php try {
	$conn = new PDO("mysql:host=localhost; dbname=a1; charset=utf8", "root" ,"");

} catch (Exception $e) {
	throw $e;
} ?>