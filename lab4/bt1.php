<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bai 1</title>
</head>
<body>
	<h1>Please input your name:</h1>
	<form action="" method="POST">
		<input type="text" name="name">
		<input type="submit" name="gui">
	</form>
	<?php 
	if(isset($_POST['gui'])){
		$ten = $_POST['name'];
		echo "<h3>HEllO $ten</h3>";
	} ?>
</body>
</html>