<?php

$mang = [1,2,6,7,11,22,26,28,9,23];
function isPrimeNumber($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $Can = sqrt ( $n );
    for($i = 2; $i <= $Can; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
 
echo ("Các số nguyên tố trong chuỗi là: <br>");
for($i = 0; $i <count($mang); $i ++) {
    if (isPrimeNumber ($mang[ $i] )) {
        echo ($mang[$i] . " ");
    }
}
?>

