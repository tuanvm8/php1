<?php 

session_start();
if (isset($_SESSION['username'])) {
	echo "Chào mừng bạn dến với website của chúng tôi";
	echo "<br>";
	echo "<a href='logout.php'>Logout</a>";
} else{
	header('location: login.php');
}
 ?>
