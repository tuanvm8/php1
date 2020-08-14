<?php 
require_once "ketnoi.php";
$id = $_GET['product_id'];
$stmt = $conn -> prepare("DELETE  from products where product_id = $id");
$stmt->execute();
if ($stmt->rowCount()>0) {
	header("location: index.php");
}
else{
	echo "Xóa không thành công";
}
 ?>
