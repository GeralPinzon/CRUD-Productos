<?php
    include("conexion.php");
    $con =conectar();
    
    $cod_producto = $_GET['id'];
    $sql = "DELETE FROM product WHERE code = '$cod_producto' ";
    $query = mysqli_query($con,$sql);

    if($query){
        header("Location: product.php");
    }
?>