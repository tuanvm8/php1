<?php
$message ="";
if (isset($_POST['dangnhap'])){
	$taikhoan =$_POST['taikhoan'];
	$matkhau =$_POST['matkhau'];
	$message = "tài khoản: $taikhoan";
	$message ="<br> Mật khẩu: $matkhau";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nhaahp dữ liệu</title>
</head>
<body>
	<form action="" method="post">
		<label for="">Tài Khoản </label>
		<input type="text" name="taikhoan" id="">
			<br>
		<label for="">Mật Khẩu </label>
		<input type="password" name="matkhau" id="">
		<br>
		<input type="submit" value="Đăng Nhập" name="dangnhap">
	</form>
<div>
<?php
if  ($message !=""){
	echo "<h2>".$message."<h2>";
}
?>
</div>
</body>
</html>