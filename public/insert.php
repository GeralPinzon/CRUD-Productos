<?php
    include("conexion.php");
    $con =conectar();

    $cod_producto = $_POST['code'];
    $nombre = $_POST['name'];
    $descripccion = $_POST['description'];
    $marca = $_POST['brand'];
    $precio = $_POST['price'];
    $fechaCreacion = $_POST['createdAt'];
    $fechaActualizacion= $_POST['updatedAt'];
    $categoria = $_POST['categoryCode'];

    $sql = "INSERT INTO `product` (`code` , `name`, `description`, `brand`, `price`,`createdAt`,`updatedAt`,`categoryCode`) VALUES 
    ('$cod_producto','$nombre','$descripccion','$marca','$precio','$fechaCreacion','$fechaActualizacion','$categoria')";
    $query = mysqli_query($con,$sql);

    if($query){
        header("Location: product.php");

    }
    

?>