<?php
    require_once "connection.php";

    $sql = "SELECT * FROM products";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $message = "";
    if ( isset($_POST['btn_themsp']) ) {
        if ( $_POST['product_name'] == "" ) {
            $message = "Bạn cần nhập tên sản phẩm";
        } else {

            $product_name = $_POST['product_name'];
            $price = $_POST['price'];
            $description = $_POST['description'];

            if ($_FILES['image']['name'] != "") {
                $dir = "img/";
                $image = time() . $_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'], $dir . $image);
            } else {
                $image = "";
            }


            $sql = "INSERT INTO products(product_name, price, image, description) VALUES(:product_name, :price, :image, :description)";

            $stmt = $conn->prepare($sql);

           
            $stmt->bindParam(':product_name', $product_name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':description', $description);


            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $message = "Thêm dữ liệu thành công";
            } else {
                $message = "Thêm dữ liệu Không thành công";
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
    <title>Thêm sản phẩm</title>
</head>
<body>
    <?php
        if ($message != "") {
            echo "<h3>$message</h3>";
        }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
            <label for="">id</label>
            <input type="text" name="id" placeholder="Auto" readonly>
        </div>
        <div class="row">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="product_name" placeholder="Tên sp">
        </div>
        <div class="row">
            <label for="">Hình mô tả</label>
            <input type="file" name="image" id="">
        </div>
        <div class="row">
            <label for="">Giá bán</label>
            <input type="number" name="price">
        </div>
        <div class="row">
            <label for="">Mô tả</label>
            <textarea name="description" id="" cols="80" rows="10"></textarea>
        </div>
        <div class="row">
           <input type="submit" value="Thêm sản phẩm" name="btn_themsp">
        </div>
    </form>
</body>
</html>