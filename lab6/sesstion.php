<?php
// sử dụng sesstion
session_start();
if (isset($_SESSION['username'])){
	$username =$_SESSION['username'];
	$role =$_SESSION['role'];
	echo "xin chào $username bạn có quyền $role";
	echo"<br>";
	echo "<a href='destroysection.php'>XÓa sesstion</a>";
}else {
	echo "sesstion k còn tồn tại";
}