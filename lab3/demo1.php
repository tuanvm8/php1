<?php
 
 // khai báo 1 hàm có 2 tham số
// hàm sẽ in ra các tham số của hàm
function tham_so_cua_ham($a,$b){
	// lấy mảng tham số
	$arr = func_get_args();
	// lấy ra phần tủ 1 của mảng
	$pt1=func_get_arg(0);
	echo "PT thứ nhất:$pt1 <hr>";
	// lấy đọ dài của mảng các tham số
	$count =func_num_args();
	for ($i =0; $i< $count;$i++){
		echo $arr[$i]." "; //In phần tử thử $i
	}
}
// sử dụng hàm
tham_so_cua_ham(10,5,6,3,"apple","orange","cherry",10,22);