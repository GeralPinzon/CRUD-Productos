<?php

    include("conexion.php");
    $con =conectar();

    $cod_producto = $_POST['code'];
    echo($cod_producto);
    $name = $_POST['name'];
    $description = $_POST['description'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $createdAt = $_POST['createdAt'];
    $categoryCode = $_POST['categoryCode'];
    $updatedAt = $_POST['updatedAt'];

    $sql = "UPDATE `product` SET `code` = '$cod_producto',`name` = '$name', `description`='$description', `brand` = '$brand', `price` ='$price',
    `categoryCode` = '$categoryCode',`updatedAt`='$updatedAt', `createdAt`='$createdAt' WHERE `code` = '$cod_producto'";
    $query = mysqli_query($con,$sql);
    if($query){
        header("Location: product.php");
    }


?>