<?php
    include("conexion.php");
    $con = conectar();
    $sql = "SELECT * FROM `category`";
    $query = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang ="en">
    <head>
        <title>Lista Categorias</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <link href="css/style.css" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:	rgb(100, 30, 22)">
        <a class="navbar-brand" href="product.php" style="color:white;">Tienda Productos</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="category.php" style="color:white;">Categorias <span class="sr-only"></span></a>
            </li>
            </ul>
        </div>
    </nav>
    <div class ="container mt-5 " >
        <h3 >Categorias Existentes</h3>
            <div class="row" style="text-align:center;">
                <div class="col-md-8 " >
                    <table class="table" >
                        <thead style="background-color: rgb(215, 219, 221 );">
                            <tr >
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Fecha creacion</th>
                                <th>Fecha Actualizacion</th>                           
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if($query ->num_rows > 0) {
                                foreach ($query as $row){
                            ?>
                            <tr>
                                <td><?php echo $row['categoryId']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php if($row['active'] !== 'false')
                                    {
                                        echo("Activo"); 
                                    }
                                    else{ 
                                        echo("Desactivado");
                                        }?></td>
                                <td><?php echo $row['createdAt']?></td>
                                <td><?php echo $row['updatedAt']?></td>
                                
                            </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>