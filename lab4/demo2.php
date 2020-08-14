<?php
if (isset($_POST['upfile']) ){
	echo "<pre>";
	var_dump($_FILES["file"]);
	echo "</pre>";

	if ($_FILES['file']['name']!=""){
		$dir ="upload/";
		$filename =$_FILES['files']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'], $dir. $filesname);
	}else{
		echo "bạn cần chọn file muốn upload";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> upload file</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="file" id="">
		<br>
		<input type="submit" value="Upload" name="upfile">
	</form>
		
		
	
</body>
</html>