<?php 
		$hostname = "localhost";
		$user = "root";
		$pass = "";
		$db = "assgment";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

		$sql = "SELECT * FROM products ";
	 	$result = mysqli_query($con,$sql);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<div class="infor">
		
				<table  width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;" >
					<tr>
						<th width="50px;">STT</th>
						<th width="50px;">Tên sản phẩm</th>
						<th width="200px;">Giá</th>
						<th width="200px;">Ảnh</th>
						<th width="200px;">Mô tả</th>
						<th width="100px;"><a href="them1.php">Thêm</a></th>
					</tr>
			<?php while ($row = mysqli_fetch_array($result)) {
			 ?>
					<tr>
						<td><?php echo $row['id']; ?> </td>
						<td><?php echo $row['product_name']; ?></td>
						<td><?php echo $row['price']; ?></td>
						<td><img src="img/<?php echo $row['image']; ?>"alt=""></td>
						<td><?php echo $row['description']; ?></td>
						<td><a href="sua.php">Sửa</a>
							<a onclick="return window.confirm('Bạn muốn xóa không');" href="xoa.php">Xóa</a>
						</td>
					</tr>
			 <?php } ?>
					
				</table>
			</div>
 </body>
 </html>