<?php 
session_start();
unset($_SESSION['username']);
unset($_SESSION['role']);
echo "session đã được xóa";
echo "<a href='sesstion.php'>Xem session</a>";
 ?>