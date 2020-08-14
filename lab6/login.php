
<?php
//sư dung sesstion
session_start();
$error ="";
if (isset($_SESSION['username'])){
	header ('location:wellcome.php');
}
// kiểm tra khi ngườu dùng đăng nhập
if(isset($_POST['dangnhap'])){
if($_POST['username']=='Admin'&& $_POST['password']=='123456'){
	// lưu lai usermname bằng sesstion
	$_SESSION['username'] =$_POST['username'];
		
	header ('location: wellcome.php');
	
}else{
	$error ="bạn đăng nhập sai";echo "$error";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>login</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="post">
		<label for="" >tên đăng nhập</label><input type="text" name="username" id="">
		<br>
		<label> Password<input type="password" name="password" id=""></label>
		<br>
		<input type="checkbox" name="remember" id="">
		<label for=""> nhớ mật khẩu</label>
		<input type="submit" value="dangnhap" name="dangnhap">

		</form>
</body>
</html>