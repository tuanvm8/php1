<?php
/*File giúp kết nối đến CSDL mySQL*/

//khai báo chuỗi kết nỗi
$dsn = "mysql:host=localhost; dbname=pt14312-web; charset=utf8";
$user = "root"; //user của database
$pass = ""; //pass của database

//sử dụng try...catch để bắt ngoại lệ khi xảy ra lỗi kết nối
try{
	//khởi tạo PDO kết nối đến CSDL
	$conn = new PDO($dsn, $user, $pass);

} catch (PDOException $e){
	//dùng throw để bắt ngoại lệ
	throw $e;
}