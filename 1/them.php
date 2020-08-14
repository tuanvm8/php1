<?php 
require_once "ketnoi.php";
$stmt = $conn->prepare("SELECT * FROM brands");
$stmt->execute();
$mang = $stmt->fetchAll(PDO::FETCH_ASSOC);
$tb = "";

if (isset($_POST['them'])) {
	extract($_REQUEST);
	if ($_POST['price'] == "" || $_POST['price'] <0) {
				$tb .= "Vui lòng điền giá dương !";
	}
	if ($_POST['quantity'] == "" || $_POST['quantity'] <0) {
				$tb .= "<BR>Vui lòng điền số lượng dương !";
	}
	$type=["image/jpg","image/png","image/jpeg"];
	if ($_FILES['image']['size'] >= 2000000 || in_array($_FILES['image']['type'], $type) == false) {
		$tb .= "Ảnh phải < 2MB và là jpg hoặc png";
	}
	else{
	$img = $_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'], "image/".$img);
	}


	if ($tb == "") {
		$stmt = $conn -> prepare("INSERT INTO products(product_name, image, price, quantity, description,brand_id) VALUES ('$product_name', '$img', '$price', '$quantity', '$description', '$brand_id')");
		$stmt -> execute();
		if ($stmt ->rowCount()>0) {
			header("location: index.php");
		}
		else{
			echo "Thêm thất bại";
		}

	}
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Thêm</title>
 </head>
 <body>
 	<div>
 		<?php 
 		if ($tb!= "") {
 			echo($tb);
 		}
 		 ?>
 	</div>
 	<form action="" method="POST" enctype ="multipart/form-data">
 		<table>
 			
 		
 		<tr>
 			<td>product_name</td>
 			<td><input type="text" name="product_name"></td>
 		</tr>

 		<tr>
 			<td>image</td>
 			<td><input type="file" name="image"></td>
 		</tr>

 		<tr>
 			<td>price</td>
 			<td><input type="number" name="price"></td>
 		</tr>
 		<tr>
 			<td>quantity</td>
 			<td><input type="number" name="quantity"></td>
 		</tr>
 		<tr>
 			<td>description</td>
 			<td><textarea name="description"></textarea></td>
 		</tr>
 		<tr>
 			<td>brand_id</td>
 			<td><select name="brand_id" id="">
 				<?php foreach ($mang as $d) {
 					?>
					<option value="<?=$d['brand_id'] ?>"><?=$d['brand_name'] ?></option>

 					<?php
 				} ?>
 			</select></td>
 		</tr>
 		<tr>
 			<td>
 				<input type="submit" value="Thêm" name="them">
 			</td>
 		</tr>
 		</table>
 	</form>
 </body>
 </html>