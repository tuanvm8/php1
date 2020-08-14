<?php
// xóa cookie
setcookie('username','Admin', time()-3600,"/");
setcookie('role', 'Quantri', time()-3600,"");
echo "cookie đã được xóa";
