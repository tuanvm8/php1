<?php 

require_once "connection.php";

    $sql = "SELECT * FROM products";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $message ="";
    

 ?>