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
			echo "Cập nhật không thành công";
		}

	}

	if (isset($_GET['product_id'])) {
		$product_id = $_GET['product_id'];
		$stmt = $conn -> prepare("SELECT * FROM products WHERE product_id = '$product_id'");
		$stmt->execute();
		$mang2 -> fetch();

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
 		<input type="hidden" name="product_id" value="<?=$mang2['product_id']?>" id="">
 		<table>
 			
 		
 		<tr>
 			<td>product_name</td>
 			<td><input type="text" name="product_name" value="<?=$mang2['product_name']?>"></td>
 		</tr>

 		<tr>
 			<td>image</td>
 			<td>
 				<input type="hidden" name="anh" value="<?=$mang2['image']?>">
 				<img src="image/<?=$mang2['image']?>" alt="">
 				<input type="file" name="image">
 			</td>
 		</tr>

 		<tr>
 			<td>price</td>
 			<td><input type="number" name="price" value="<?=$mang2['price']?>"></td>
 		</tr>
 		<tr>
 			<td>quantity</td>
 			<td><input type="number" name="quantity" value="<?=$mang2['quantity']?>"></td>
 		</tr>
 		<tr>
 			<td>description</td>
 			<td><textarea name="description"><?=$mang2['description']?></textarea></td>
 		</tr>
 		<tr>
 			<td>brand_id</td>
 			<td><select name="brand_id" id="">
 				  <?php
                        foreach ($mang as $r) {
                            if ($r['product_id'] == $mang2['product_id']) {
                            ?>
                            <option selected value="<?=$r['product_id']?>"><?=$r['product_name']?></option>

                            <?php
                            }else {
                            ?>
                            <option value="<?=$r['product_id']?>"><?=$r['product_name']?></option>
                            
                            <?php
                            
                            }
                        }
                        ?>
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