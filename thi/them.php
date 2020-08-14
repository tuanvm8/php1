<?php 
require_once "connection.php";
$stmt =$conn->prepare("SELECT *from publishers");
$stmt ->execute();
$mang=$stmt->fetchAll(PDO::FETCH_ASSOC);
$mess ="";
if (isset($_POST['them'])){
extract($_REQUEST);
if ($_POST['quantity']==""|| $_POST['quantity']<0){
	$mess.="vui long dien so luong va so luong phai la so duong";
}
if ($_POST['price']==""|| $_POST['price']<0){
	$mess.="vui long dien gia va gia phai la so duong";
}

$type=['image/jpg','image/png','image/jpeg'];
	if($_FILES['image']['size']>=20000000 || in_array($_FILES['image']['type'],$type)==false){
   $mess .= "anh phai < 2MB";
	}
	else{
		$img=$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],"image/".$img);
		if ($mess =="") {
			$stmt =$conn -> prepare("INSERT INTO books(book_title,image,quantity,intro,detail,price,pub_id) VALUES('$book_title,','$img','$quantity','$intro','$detail','$price','$pub_id')");
			$stmt ->execute();
			if($stmt->rowCount()>0){
				header("location: index.php");
			}
		}
	}
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>them</title>
 </head>
 <body>
 	<div>
 		<?php 
if ($mess !=""){

	echo $mess;
}
 		 ?>
 	</div>
 	<form action="" method="POST" enctype="multipart/form-data">
 		<table>
 			<tr>
 				<td>book_title</td>
 				<td><input type="text" name="book_title"></td>
 			</tr>
 			 			<tr>
 				<td>image</td>
 				<td><input type="file" name="image"></td>
 			</tr>
 			 			<tr>
 				<td>quantity</td>
 				<td><input type="number" name="quantity"></td>
 			</tr>

 			 			 			<tr>
 				<td>intro</td>
 				<td><input type="text" name="intro"></td>
 			</tr>
 			 			 			 			<tr>
 				<td>detail</td>
 				<td><textarea name="detal"></textarea></td>
 			</tr>
 			 			 			<tr>
 				<td>price</td>
 				<td><input type="number" name="price"></td>
 			</tr>
 			 			 			<tr>
 				<td>pub_id</td>
 				<td><select name="pub_id" id="">
 					<?php foreach ($mang as $k ) {
                     ?>
<option value="<?=$k['pub_id'] ?>">
	<?=$k['pub_name'] ?>
</option>



                     <?php
 					} ?>
 				</select></td>
 			</tr>
 			<tr>
 				<td>
 					<input type="submit" name="them" value="them">
 				</td>
 			</tr>
 		</table>
 	</form>
 </body>
 </html>