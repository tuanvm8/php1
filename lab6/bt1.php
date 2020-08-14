<?php
if (isset($_POST['dangnhap'])) {
	$gioi = $_POST['cookie'];
	echo " Remember me for 7 day:" .$gioi;
}

else {
    
	  
	  }
	 





?>





<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bt1</title>
</head>

<body>
	<table border="1">
		<form action="" method="POST">
    <tr>
        <th colspan="3">THÔNG TIN SINH VIÊN</th>
    </tr>
    <tr>
        <td><label for="">Tài khoản: </label></td>
        <td><input type="text" name="taikhoan" id=""></td>
		
        
    </tr>
    <tr>
        <td><label for="">Mật khẩu:</label></td>
        <td><input type="password" name="matkhau" id=""></td>
        
    </tr>
    <tr>
        <td></td>
        <td><input type="radio" name="cookie" value="Remember me for 7 day" id="">Remember me for 7 day</td>
        
    </tr>
			  <tr>
        <th colspan="3">Note:<?php
			echo "Tk:".$_POST['taikhoan']." MK:  ".$_POST['matkhau'];?></th>
    </tr>
<tr>
        <th colspan="3"><input style="text-align: center;" type="submit" value="Sbumit" name="dangnhap"></th>
    </tr>

</table>

		

	
	
</body>
	
	
	
</html>