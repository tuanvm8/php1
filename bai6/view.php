<?php
//thêm trang connection vào để làm việc với CSDL
require_once 'connection.php';

//làm việc với dữ liệu
//làm việc với danh mục
$sql = "SELECT * FROM danhmuc";

$stmt = $conn->prepare($sql);
//thực thi lệnh sql
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC); //lấy ra toàn bộ dữ liệu theo câu lệnh sql

//hiển thị dữ liệu
/*echo "<pre>";
var_dump($result);
echo "</pre>";*/
foreach ($result as $row) {
	/*echo $row->ma_dm, " " .$row->ten_dm . "<br>";*/
	echo $row['ma_dm'], " " .$row['ten_dm'] . "<br>";
}

//Insert dữ liệu
$sql = "INSERT INTO danhmuc(ten_dm) Values(:ten_dm)";
$stmt = $conn->prepare($sql);
//chèn dữ liệu theo bindParam
$ten_dm = 'Xiaomi';
$stmt->bindParam(':ten_dm', $ten_dm);
//thực thi
$stmt->execute();
if ($stmt->rowCount() > 0) {
	echo "Thêm dữ liệu thành công";
}
//xóa dữ liệu
$sql = "DELETE FROM danhmuc WHERE ten_dm=:ten_dm";
$ten_dm = 'Xiaomi';
$stmt = $conn->prepare($sql);
//bind dữ liệu
$stmt->bindParam(":ten_dm", $ten_dm);
//thực thi
$stmt->execute();
if ($stmt->rowCount() > 0) {
	echo $stmt->rowCount() . "Bản ghi được xóa";
}

//cập nhật dữ liệu
$sql = "UPDATE danhmuc SET ten_dm=:ten_dm WHERE ma_dm=:ma_dm";
$stmt = $conn->prepare($sql);
//khai báo dữ liệu cần sửa
$ma_dm = 1;
$ten_dm = "Sony";
//bind dữ liệu
$stmt->bindParam(":ten_dm", $ten_dm);
$stmt->bindParam(":ma_dm", $ma_dm);


//thực thi
$stmt->execute();
if ($stmt->rowCount() > 0) {
	echo "<br>" .$stmt->rowCount() . "Cập nhật dữ liệu thành công";
}