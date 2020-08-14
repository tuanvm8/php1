<?php
//mang trong php
$arr= array(2,3,7,'táo',10);

// in các phần tử mảng
for ($i=0;$i < count($arr);$i++){
	echo $arr[$i]."<br>";
}
//vòng lặp foreach
foreach ($arr as $a){
	echo "$a <br>";
}
//mảng có key và value
$arr2 = [1=>"Học",2=>"hành","nax"=>"min", "key"=>'value'];
foreach ($arr2 as $key => $value) {
	echo "Key: $key -Value:$value<br>";
}