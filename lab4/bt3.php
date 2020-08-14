<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bài3</title>
    <link rel="stylesheet" href="">
</head>
<style type="text/css" media="screen">
    article {
        width: 900px;
        height: 600px;
        margin: auto;
        background: white;
        font-family: arial
    }
    .left {
        float: left;
    }
    .right {
        float: right;
    }
    header {
        width: 900px;
        height: 40px;
        background: gray;
        margin: auto;
    }
</style>

<body>
    <?php   session_start(); ?>
    <header>
     
    </header>
    <article>
        <section class="left">
            <form method="POST">
                <p style="font-weight: bold">LOGO</p>
                <p style="margin-left: 50px;margin-top: 20px;font-weight: bold;font-size: 15px">Username <Br>
                    <input type="text" name="tk" value="<?php  if(isset($_SESSION['taikhoan'])) echo $_SESSION['taikhoan']; ?>" style="margin-top: 20px;width: 270px;height:25px"></p>
                <p style="margin-left: 50px;margin-top: 20px;font-weight: bold;font-size: 15px">Password <Br>
                    <input type="password" name="mk" value="<?php  if(isset($_SESSION['matkhau'])) echo $_SESSION['matkhau']; ?>" style="width: 270px;height:25px;margin-top: 20px">
                </p>
                <p style="margin-left: 45px;margin-top: 20px"><input type="checkbox" name="ghinho"> Remember me</p>
                <input type="submit" name="login" value="Log in" style="width: 50px;height: 30px;margin-left: 120px">
                <p><?php echo login(); ?></p>
            </form>
        </section>




        <section class="right">

            <form action="" method="POST">


                <p style="font-weight: bold">Signup for New Account?</p>
                <p style="margin-top: 20px;font-weight: bold;font-size: 15px">Username <Br>
                    <input type="text" name="tkdk" style="margin-top: 20px;width: 350px;height:25px"></p>
                <p style="color: rgb(255, 0, 102);font-size: 15px"><?php echo username() ?></p>
                <p style="margin-top: 20px;font-weight: bold;font-size: 15px">Useremail* <Br>
                    <input type="email" name="email" style="width: 350px;height:25px;margin-top: 20px;">
                    <p style="color: rgb(255, 0, 102);font-size: 15px"><?php echo useremail(); ?></p>
                </p>
                <div class="left">
                    <p style="font-weight: bold;font-size: 15px">Select Title</p>
                    <select style="width: 100px;height: 26px">
                        <option>Mr.</option>
                        <option>Mrs.</option>
                    </select>
                </div>
                <div class="right">
                    <p style="font-weight: bold;font-size: 15px">Full name *</p>
                    <input type="text" name="fullname" value="" style="width: 210px;height:20px"></p>
                    <p style="color: rgb(255, 0, 102);font-size: 15px"><?php echo fullname(); ?></p>
                </div>


                <p style="font-size: 17px;font-weight: bold;margin-top: 120px;font-size: 15px">Company detail</p>
                <p style="font-size: 15px;margin-top: 20px">Provide detail about your company</p>
                <p style="font-size: 15px;font-weight: bold;margin-top: 10px;font-size: 15px">Company name</p>
                <input type="text" name="company" style="width: 250px;height:25px">
                <p style="color: rgb(255, 0, 102);font-size: 15px"><?php echo company(); ?></p>

                <p style="margin-left: 10px;margin-top: 5px"><input type="checkbox" name="dieukhoan"> I am agree with registration</p>
                <p style="color: rgb(255, 0, 102);font-size: 15px"><?php echo chon(); ?></p>



                <button type="submit" name="register" style="width: 100px;height: 30px;margin-left: 70px">Register</button>
            </form>
        </section>


        <?php 
    function username(){
         if (isset($_POST["register"])) {

           if (empty($_POST["tkdk"])){
              echo ' * Bạn chưa nhập username'; }  ; }}

     function useremail(){
         if (isset($_POST["register"])) {

           if (empty($_POST["email"])){
              echo ' * Bạn chưa nhập email'; }  ; }}

         
         function fullname(){
         if (isset($_POST["register"])) {

           if (empty($_POST["fullname"])){
              echo ' * Bạn chưa nhập fullname'; }  ; }}


         function company(){
         if (isset($_POST["register"])) {

           if (empty($_POST["company"])){
              echo ' * Bạn chưa nhập company'; }  ; }}

           function chon(){
         if (isset($_POST["register"])) {

           if (empty($_POST["dieukhoan"])){
              echo ' * Bạn phải chấp nhận điều khoản'; }  ; }}

          function login(){
              if (isset($_POST["login"])) {
                 if (empty($_POST["tk"])){
              echo 'Bạn chưa nhập tài khoản hoặc mật khẩu'; 
              } else {

                    $tentaikhoan="helloban";
                    $matkhau="12345";
                if ((($_POST["tk"])!=$tentaikhoan) ||(($_POST["mk"])!=$matkhau) ) {

                  echo 'Sai tên tài khoản hoặc mật khẩu';
                  
                }else{
                  echo 'Đăng nhập thành công';
                  if (isset($_POST["ghinho"])) {
                    $_SESSION["taikhoan"]=$tentaikhoan;
                    $_SESSION["matkhau"]=$matkhau;
                    
                  }
                }
                
              }

          }

      }
          

        ?>

    </article>
    <!--   <aside>...</aside>
       <footer>...</footer> -->



</body>

</html>
