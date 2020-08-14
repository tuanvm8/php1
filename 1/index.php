<?php 
require_once "ketnoi.php";
$stmt = $conn -> prepare("SELECT products.*, brand_name from brands, products where brands.brand_id = products.brand_id");
$stmt->execute();
$mang = $stmt->fetchAll(PDO::FETCH_ASSOC);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Index</title>
 </head>
 <body>
 	<table border="1">
 		<tr>
 			<td>product_id</td>
 			<td>product_name</td>
 			<td>image</td>
 			<td>price</td>
 			<td>quantity</td>
 			<td>description</td>
 			<td>brand_name</td>
 			<td>Hanh dong</td>
 		</tr>
 		<?php 
 		 foreach ($mang as $r) {
 		 	?>
			<tr>
				<td><?=$r['product_id'] ?></td>
				<td><?=$r['product_name'] ?></td>
				<td><img src="image/<?=$r['image'] ?>" alt="" width="100px"></td>
				<td><?=$r['price'] ?></td>
				<td><?=$r['quantity'] ?></td>
				<td><?=$r['description'] ?></td>
				<td><?=$r['brand_name'] ?></td>
				<td><a href="sua.php?product_id=<?=$r['product_id'] ?>">Sửa</a>
					<a href="xoa.php?product_id=<?=$r['product_id'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa')">Xóa</a>
				</td>
			</tr>
	

 		 		<?php
 			 }
 		 ?>
			

 	</table>
 	<div>
 		<a href="them.php">Thêm</a>
 	</div>
 </body>
 </html>