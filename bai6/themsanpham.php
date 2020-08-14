<?php 
   require_once "connection.php";
   //load danh mục sản phẩm vào
   $sql = "select * from danhmuc";
   //xử lí
   $stmt = $conn->prepare($sql);
   //thực thi
   $stmt->execute();
   //lấy dữ liệu
   $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
   $message="";
   if (isset($_POST['btn_themsp'])){
   	if ($_POST['ten_sp']==""){
   		$message="bạn cần nhập tên sp";

   	}else{
   		//lấy dữ liệu nhập vào
   		$ten_sp=$_POST['ten_sp'];
   		$ma_dm= $_POST['ma_dm'];
   		$gia_ban=$_POST['gia_ban'];
   		$ngay_nhap=$_POST['ngay_nhap'];
   		$mo_ta=$_POST['mo_ta'];
   		//upload ảnh
   		//kiểm tra hình ảnh nhập vào
   		if($_FILES['uhinh']['name']!=""){
   			$dir="imgages/";
   			$hinh =time().$_FILES['uhinh']['name'];
   			move_uploaded_file($_FILES['uhinh']['tmp_name'],$dir.$hinh);

   		}else{
   			$hinh="";
   		}
   		//vieeest câu lệnh  sql
   		$sql="INSERT INTO sanpham(ma_dm,ten_sp,hinh,mota,giaban,ngay_nhap,so_luotxem) VALUES(:ma_dm,:ten_sp,:hinh,:mo_ta,:gia_ban,:ngay_nhap,:so_luot_xem)";
   		//xử lí câu lẹnh sql
   		$stmt->bindParam(':ma_dm',$ma_dm);
   		$stmt->bindParam(':ten_sp',$ten_sp);
   		$stmt->bindParam(':hinh',$hinh);
   		$stmt->bindParam(':mo_ta',$mo_ta);
   		$stmt->bindParam(':gia_ban',$gia_ban);
   		$stmt->bindParam(':ngay_nhap',$ngay_nhap);
   		$stmt->bindParam(':so_luot_xem',0);
   		//thực thi
   		$stmt->execute();
   		if ($stmt->rowCount()> 0){
   			$message="thêm dư liệu thành cônng";
   		}
   	}
   }

?>
<!DOCTYPE html>
<html>
<head>
	<title>thêm sản phẩm</title>
</head>
<body>
	<?php
	if($message!=""){
		echo "<h3>$message<h3>";
	}
	?>
 
<form action="" method="post" enctype="multipart/form-data">
	<div class="row">
		<label for="">Mã sản phẩm</label>
		<input type="text" name="id_sp" placeholder="auto" readonly="">
	</div>
	<div class="row">
		<label for="">Tên sản phẩm</label>
		<input type="text" name="ten_sp" placeholder="tên sp">
	</div>
	<div class="row">
		<label for="">Danh mục</label>
        <select name="ma_dm" id="">
        	<?php
        	foreach ($result as $row) {
        		?>
                    <option value="<?=$row['ma_dm']?>"><?=$row['ten_dm']?></option>
                <?php

        		
        	}
        	?>
        </select>
	</div>
	<div class="row">
		<label for="">Hình mô tả</label>
		<input type="file" name="uhinh" id="">
	</div>
	<div class="row">
		<label for="">Giá bán</label>
		<input type="number" name="gia_ban">
	</div>
	<div class="row">
		<label for="">Ngày nhập</label>
		<input type="date" name="ngay_nhap">
	</div>
	<div class="row">
	    <label for="">Mô tả</label>
		<textarea name="anh" id="" cols="300" rows="10"></textarea>
	</div>
	<div class="row">
		<input type="submit" value="Thêm sản phẩm" name="btn_themsp">
	</div>
</form>
</body>
</html>