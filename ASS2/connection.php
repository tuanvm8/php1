<?php
//Khai báo nguồn kết nối dữ liệu
$dsn = "mysql:host=localhost; dbname=assgment; charset=utf8";
$username = "root";
$password = "";

//Kết nối đến CSDL
try {
    //Khai báo kết nối
    $conn = new PDO($dsn, $username, $password);

} catch (PDOException $e) {
    //Nếu xảy ra lỗi thì bắt (hiển thị) ra ngoài
    throw $e;
}
