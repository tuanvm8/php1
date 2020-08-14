<?php 
require_once "connection.php";

$message = "";

if (isset($_POST['add'])) {
if ($_POST['name']=="" || $_POST['email']=="" || $_POST['pass']=="") {
	echo "<b>Vui lòng điền đầy đủ thông tin</b>";
}
	else {
        $name = $_POST['name'];
        $password = md5($_POST['pass'] );
        $email = $_POST['email'];

        $sql = "INSERT INTO user(name, email, password) VALUES(:name, :email, :password)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "Tạo tài khoản quản trị thành công";
        } else {
            $message = "Không thể thêm mới";
        }
    }
}
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Adduser</title>
 </head>
 <body>
 	<form action="" method="POST">
 		<p>Họ và tên:</p><input type="text" name="name"><br>

 		<p>Email:</p><input type="text" name="email"><br>

 		<p>Mật khẩu:</p><input type="password" name="pass"><br><br>

 		<input type="submit" value="ADD USER" name="add">
 		 	</form>

 </body>
 </html>