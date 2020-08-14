<?php

// khởi tạo tính tổng của 3 số
// hàm có giá trị trở về
function tong_ba_so($a, $b, $c){
	$t= $a + $b +$c;
	return $t;
}
// sử dụng hàm trong chương trình
echo " tổng của 3 + 4 +5 =".tong_ba_so(3,4,5);
echo "<br>";

//  khởi tạo hàm thong bao
// hàm có giá trị trả về
function thongbao(){
	echo "lỗi chương trình";
	echo"<script>";
	?>
	alert("lỗi xẩy ra");
	<?php
	echo "</script>";
}

  // gọi hàm
thongbao();

// hàm có sử dụng tham biến
//  tham biến đc sử dụng đây và phía trước biến
function myfunction (&$a,$b){
	$b = $a +10;
	$a =$a +$b;
	// in ra biesn $a và $b ở trong hàm
echo "a =$a,b =$b";
}
//khai báo biến trong $a, $b
$a =5;
$b=10;
// sử dụng biến trong ham mỳunction
myfunction($a,$b);

// in lại hai biến $a, $b khi ra khỏi hàm
echo "<br>";
echo "hai biến a, b khi ra khỏi hàm";
echo "<br>a = $a, b =$b";
echo "<hr>";
// biến toàn cục và biến cục bộ
$g =10;
function myGlobal(){
	// sử dụng biến $g
 global $g;
	echo " biến toàn cục g=" .$g;
}
myGlobal();