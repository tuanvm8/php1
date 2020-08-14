<?php
// bắt đầu lam việc vs sectionstar
session_start();

// tạo secction
$_SESSION['username'] ='Adimin';
$_SESSION['role'] = 'Quantri';
echo "sesstion đã được tạo";
echo "<br> <a href='sesstion.php'> xem sesstion.php</a>";
?>