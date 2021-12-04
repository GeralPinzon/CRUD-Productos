<?php
    error_reporting(5);
    include("conexion.php");
    $con =conectar();

    $cod_producto = $_GET['id'];
    $sql = "SELECT * FROM `product` WHERE `code` = '$cod_producto' ";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);
    $fcha = date("Y-m-d");  
?>
<!DOCTYPE html>
<html lang ="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <link href="css/style.css" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class= "container mt-5">
            <h2>Editar Producto</h2>
            <form action="update.php" method="POST">
            
                Codigo: 
                <input type="hidden"  name="code" value="<?php echo $row['code']?>" >
                Nombre: 
                <input type="text" minlength="4" class="form-control mb-3" name="name" value="<?php echo $row['name']?>">
                Descripccion: 
                <input type="text" class="form-control mb-3" name="description" value="<?php echo $row['description']?>">
                Marca: 
                <input type="text" class="form-control mb-3" name="brand" value="<?php echo $row['brand']?>">
                Precio: 
                <input type="text" pattern="[0-9,.]+" class="form-control mb-3" name="price" value="<?php echo $row['price']?>" oninvalid="this.setCustomValidity('Digite solo numeros')"required>
                <input type="hidden" name = "updatedAt" value = "<?php echo $fcha;?>">
                <input type="hidden" name = "createdAt" value = "<?php echo $row['createdAt']?>">
                Categoria: 
                <input type="text" pattern="[0-9]+" class="form-control mb-3" name="categoryCode" value="<?php echo $row['categoryCode']?>" oninvalid="this.setCustomValidity('Digite solo numeros')"required>
                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>
        </div>
    </body>
</html>