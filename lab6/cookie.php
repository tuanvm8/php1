<?php
/// sửu dụng cookie
if(isset($_COOKIE['username'])){
	$username = $_COOKIE['username'];
	$role =$_COOKIE['role'];
	echo "xin chào $username bạn có quyền là $role";
	echo "<br>";
	echo "<a href='destopcookie.php'> hủy cookie</a>";
}else{
	echo"cookie cua bạn chưa được khởi tạo";
}