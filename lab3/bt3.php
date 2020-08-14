<?php
function ham_kiem_tra_so_nguyen_to($n)
{
	for ($i=2; $i < $n ; $i++) { 
		if ($n & $i ==0) {
			return 0;
		}
	}
	return 1;
}
$a = ham_kiem_tra_so_nguyen_to(3);
if ($a == 0) {
   echo "Đây không phải là số nguyên tố" ."<br>";	
}else{
	echo "Đây là số nguyên tố" . "<br>";
}
?>
