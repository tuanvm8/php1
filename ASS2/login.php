<?php
    session_start();
    require_once "connection.php";
    $message = "";
    if ( isset($_POST['btn_login']) ) {
        if ($_POST['email'] == "" && $_POST['password'] == "") {
            $message = "<b>Bạn phải nhập vào email và password</b>";
        } else {
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $sql = "SELECT * FROM user WHERE email='{$email}' AND password='{$password}'";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            $stmt->execute();
            $count = $stmt->rowCount();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($count > 0) {
                $_SESSION['email'] = $result['email'];
                $_SESSION['password'] = $result['password'];
                header("location: index.php");
            } else {
                $message = "<b> Sai tài khoản mật khẩu </b>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div>
        <?php
            if ($message != "") {
                echo $message;
            }
        ?>
    </div>
    <form action="" method="post">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Login" name="btn_login">
                <button><a href="adduser.php">Đăng kí</a></button>
            </td>            
        </tr>
    </table>
    </form>
</body>
</html>