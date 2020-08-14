<?php 
require_once "connection.php";
$id=$_GET['book_id'];
$stmt =$conn->prepare("DELETE FROM books WHERE books.book_id = $id");
$stmt->execute();
if($stmt->rowCount()>0){
	header("location: index.php");
}

 ?>