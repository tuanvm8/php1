
<?php
$a=3;
$b=6;
$c=2;
echo "Tinh DELTA :";
echo "<br>";


    $delta = ($b*$b) - (4*$a*$c);
 
    if ($delta < 0){
        echo 'Phương trình vô nghiệp';
    }
    else if ($delta == 0){
        echo  'Phương trình nghiệp kép x1 = x2 = ' . (-$b/2*$a);
    }
    else {
        echo 'Phương trình có hai nghiệp phân biệt, x1 = ' . ((-$b + sqrt($delta))/2*$a);
        echo ',x2 = ' . ((-$b - sqrt($delta))/2*$a);
    }


