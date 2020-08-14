<?php
session_start();
if(isset($_SESSION['counter'])){
    $_SESSION['counter'] +=1;
}else{
    $_SESSION['counter'] = 1;
}
$msg = "Bạn đã truy cập trang này" .  $_SESSION['counter'];
$msg.="lần trong session này";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thiết lập session trong PHP</title>
</head>
<body>
    <?php echo ($msg);?>
</body>
</html>