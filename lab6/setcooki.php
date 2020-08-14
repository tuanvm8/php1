<?php
//tạo setcookie(tên cooke, gtri, thời gian, path),
// sử dujnh cookie: $COOKIE['tencookie']


// cài đặt cookie
setcookie('username','Admin', time() + 60*60*24,"/");
setcookie('role','Quan tri',time() + 60*60*24,"/");
echo "cookieđã được tạo";


?>