
<?php
$mess = <<<'MESSAGE'
<h1> Tieu De 1 </h1>
<div> Noi Dung 1 </div>
<h1> Tieu De 2</h1>
<div> Noi Dung 2</div>
MESSAGE;

echo $mess;

$s = "<b> Polytechnic </b>";
echo htmlentities($s);

// kiem tra chuoi rong
$chuoi1 = "";
if (empty($chuoi1)){
	echo "Chuỗi là rỗng";

}
else {
	echo "Chuỗi không rỗng ";
}
// khai báo 1 chuỗi
$str="FPT -poly-tec-nic";
$arrstr =explode('-',$str);
echo "<br>";
print_r($arrstr);// in ra mảng $arrstr
// hàm tạo mảng số nguyên tự đọng
//$arr là mảng tham chiếu của hàm 
//$n là độ dài của mảng
function mangRandom(&$arr=array(),$n){
	for ($i=0; $i<$n;$i++){
		$arr[$i]=mt_rand(0,100);
	}
}
echo"<hr>";
$a=array();
mangRandom($a,20);
// in mang a
foreach ($a as $item){
	echo "$item    ";
}
echo "<hr>";
//date time trong php
date_default_timezone_set('Asia/Bangkok');// đặt mốc thời gian về Asia/bangkok
// hàm time lấy thời gian hiện tại 
$d =time();
echo "thời gian hiện tại".$d;
$d = date('d-m-Y H:i:s');
echo"<hr>thời gian hiện tại".$d;
