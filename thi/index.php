<?php 
require_once "connection.php";
$stmt = $conn -> prepare("SELECT books .*,pub_name from books, publishers where books.pub_id = publishers.pub_id");
$stmt -> execute();
$mang = $stmt->fetchAll(PDO::FETCH_ASSOC);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>index</title>
 </head>
 <body>
  <table border="1">
    <tr>
      <td>book_id</td>
      <td>book_title</td>
            <td>image</td>
            <td>quantity</td>
            <td>intro</td>
            <td>detail</td>
            <td>price</td>    
           <td>pubd_id</td> 
           <td>thao tác</td> 
        </tr>
        <?php 
           foreach ($mang as $k) {
            ?>
            <tr>
              <td><?=$k['book_id'] ?></td>
              <td><?=$k['book_title'] ?></td>
              <td><img src="image/<?=$k['image'] ?>" alt="" width="120px"></td>
              <td><?=$k['quantity'] ?></td>
              <td><?=$k['intro'] ?></td>
              <td><?=$k['detail'] ?></td>
              <td><?=$k['price'] ?></td>
              <td><?=$k['pub_name'] ?></td>
              <td>
                <a href="sua.php?book_id=<?=$k['book_id']?>">Sua</a>
                <a href="xoa.php?book_id=<?=$k['book_id']?>" onclick="return confirm('bạn có muốn xóa không')">Xoa</a>
              </td>
            </tr>
            <?php
           }
         ?>
  </table>
  <div>
    <a href="them.php">them</a>
  </div>
 </body>
 </html>