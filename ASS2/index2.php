<?php 
		require_once "connection.php";
		$sql = "SELECT * FROM products";

		$stmt = $conn -> prepare($sql);
		$stmt -> execute();

		$result = $stmt ->fetchAll(PDO::FETCH_ASSOC);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.js">
	<link rel="stylesheet" href="js/bootstrap.min.js">
	<link rel="stylesheet" href="js/popper.min.js">
</head>
<style>
	.navbar{
		background: pink;
	}

	.row{
		margin-top: 30px;
	}
	p{
		
	}
</style>
<body>
	<header>
		<nav class="navbar">
		<div class="container">
			<a href="" class="navbar-branch">
				<img src="img/logo/3.png" alt="" width="70px">
			</a>
			<ul class="nav">
				<li class="nav-item"><a href="index_2.php" class="nav-link">Trang chủ</a></li>
				<li class="nav-item"><a href="login.php" class="nav-link">Quản lí</a></li>
				<li class="nav-item"><a href="login.php" class="nav-link">Đăng nhập</a></li>
				<li class="nav-item"><a href="adduser.php" class="nav-link">Đăng kí</a></li>
				
			</ul>
		</div>
	</nav>
	<div class="jumbotron"></div>
	</header>

	<div class="container">
		

		<div class="row">
				<?php foreach ($result as $row) {
			 ?>
			<div class="col-lg-3">
				<img  width="250px" src="img/<?= $row['image']; ?>"alt="">
			</div>
			<div class="col-lg-3">
				<p><?= $row['product_name']; ?></p>
				<p class="gia"><td><?= $row['price']; ?></td></p>
				<p class="mota"><?= $row['description']; ?></p>
			</div>
			<?php } ?>
		</div>


			 

	</div>
</body>
</html>