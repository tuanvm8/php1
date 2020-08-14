<?php
session_start();
if(isset($_POST['btn_submit'])){

	if($_POST['username']=='admin'&& $_POST['password']=='123123' || $_POST['username']=='user' && $_POST['password']=='123456'){
		echo "<b>Dang nhap thanh cong</b>";
		$_SESSION['username'] = $_POST['username'];
	
  		//header('location: bt3.php');
	}
	else{
		echo "<b>Sai ten hoac tai khoan mat khau <b>";
	}
}
 ?>
<html>
<head>
	<title>bt2_lab4</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" >
	<fieldset>
	    <legend>Đăng nhập</legend>
	    	<table>
	    		<tr>
	    			<td>Username</td>
	    			<td><input type="text" name="username" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Password</td>
	    			<td><input type="password" name="password" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Đăng nhập"></td>
	    		</tr>
	    	</table>
  </fieldset>
  </form>
</body>
</html>