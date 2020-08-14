<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bài2</title>
</head>
<body>
<p> $a =[1, 2, 6, 7, 11, 22, 26, 28, 9, 23]</p>
<?php
echo "số lẻ trong mảng là : ";
$mang=array(1,2,6,7,11,22,26,28,9,23);
//in ra các phần tử mảng
for($i=0; $i <count($mang);$i++){
	if($mang[$i]%2!=0){
		echo $mang[$i]. " ,";
	}
}
?>

</body>
</html>