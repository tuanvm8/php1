<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fORM trong php</title>

</head>
<body>
		<?php 
		if (isset($_POST['gui'])) {
			$tp = $_POST['thanhpho'];
			echo $tp."<br>";
			$gt = $_POST['gioi'];
			echo $gt;
			$sothich="";
			if(isset($_POST['sothich'])){
			
				echo "<br>";
				foreach ($_POST['sothich'] as $item) {
					$sothich .= $item.",";		
				}
			}

			$sothich = rtrim($sothich, ",");
			echo "<br>".$sothich;
		}
	 ?>
	<form action="" method="POST">
		<label for="">Thành phố</label>
		<br>

		<select name="thanhpho" id="">
			<option value="hn">Hà Nội</option>
			<option value="hcm">Hồ Chí Minh</option>
			<option value="danang">Đà Nẵng</option>
			<option value="hue">Huế</option>
		</select>
		<br>
			<label for="">Giới tính</label>
			<br>
			<input type="radio" name="gioi" value="Nam" checked>Nam <br>
			<input type="radio" name="gioi" value="Nữ">Nữ <br>

			<fieldset>
			<legend>Sở thích</legend>	
			<input type="checkbox" name="sothich[]" value="Bóng đá"> Bóng đá
			<input type="checkbox" name="sothich[]" value="Mua sắm"> Mua sắm
			<input type="checkbox" name="sothich[]" value="Điện tử">Điện tử
			<br>
			</fieldset>
			<input type="submit" value="Gửi" name="gui">
	</form>


		<div class="message">
				
		</div>

</body>
</html>