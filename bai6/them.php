<?php
require_once "connection.php";
//khi người dùng nhấn nút thêm
if (isset($_POST['btn_them'])) {
	$ten_dm = $_POST['ten_dm'];
	$sql = "INSERT INTO danhmuc(ten_dm) VALUES(:ten_dm)";
	$stmt = $conn->prepare($sql);
	//bind dữ liệu
	$stmt->bindParam(":ten_dm", $ten_dm);
	//thực thi
	$stmt->execute();
	//nếu thêm thành công
	if ($stmt->rowCount() > 0) {
		//chuyển sang trang view.php
		header("location: view.php");
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm dữ liệu</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
	<table>
	<tr>
		<td>tên sách</td>
	<input type="text" name="" placeholder="Auto" id="" readonly="">
	<br>
	<label for="">Tên danh mục</label>
	<input type="text" name="ten_dm" id="">
	<br>
	<input type="submit" name="btn_them" value="thêm" >
</tr>
</table>
</form>
</body>
</html>
