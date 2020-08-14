<?php

//vong lap for
// lap 5 lan
echo "<h2> vong lap </h2>";
for ($i=0; $i<5; $i++){
	echo "<p>$i. Vong lap for</p>";
}

//vong lap while
$dem = 0;
while ($dem<5) {
	echo " <p> $dem. vong lap while </p> ";
	$dem++;
}

//vong lap do ... while
do{
	echo "<p> $dem. vong lap do ... while</p>";
	$dem--;
}
	while ($dem>0) ;