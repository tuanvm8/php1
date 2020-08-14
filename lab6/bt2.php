<?php
session_start();
if(isset($_SESSION['counter'])){
	$_SESSION['counter'] +=1;
} else{
	$_SESSION['counter'] =1;
	
}
$msg="Ban da truy cap trang nay".$_SESSION['counter'];
$msg .="lan trong session nay.";
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BT2</title>
</head>

<body>
	<?php echo($msg); ?>
</body>
</html>