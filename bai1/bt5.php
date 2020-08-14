<?php
$luong= 70000000;

if($luong>=20000000 && $luong<=30000000){
	echo "Mức lương từ 20-30tr là: " .$luongchinh= $luong - (($luong-20000000)*5/100)."<br>";
	echo "Thuế là: ".$thue=(($luong-20000000)*5/100);
}

else{
	
if($luong <=50000000){
	echo "Mức lương từ 30-50tr là: " .$luongchinh= $luong - (($luong-30000000)*10/100)-(10000000*5/100)."<br>";
	echo "Thuế là: ".$thue=(($luong-30000000)*10/100)+(10000000*5/100);
}
	else{
		
	if($luong<=100000000){
		echo "Mức lương từ 50-100tr là: " .$luongchinh= $luong -(($luong-50000000)*15/100)- (20000000*10/100)-(10000000*5/100)."<br>";
		echo "Thuế là: ".$thue=(($luong-50000000)*15/100)+ (20000000*10/100)+(10000000*5/100);
	}
		else{
			
		if($luong>100000000){
			echo "Mức lương trên 100tr là: " .$luongchinh= $luong - (($luong-100000000)*20/100) - (50000000*15/100) -(20000000*10/100) - (10000000*5/100)."<br>";
			echo "Thuế là: ".$thue=(($luong-100000000)*20/100) + (50000000*15/100) +(20000000*10/100) + (10000000*5/100);
		}
			else{
			if($luong<20000000){
				echo "Khong phải nộp thuế";
			}
			}
		}
	}
}


	
