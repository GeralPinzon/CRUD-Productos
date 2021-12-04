<?php
    include("conexion.php");
    $con = conectar();
    $sql = "SELECT * FROM `product`";
    $query = mysqli_query($con,$sql);
    $fcha = date("Y-m-d");    
?>
<!DOCTYPE html>
<html lang ="en">
    <head>
        
        <title>Productos Existentes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <link href="css/style.css" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color:	rgb(100, 30, 22)" >
            <a class="navbar-brand" href="product.php" style="color:white;">Tienda Productos</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="category.php" style="color:white;">Categorias <span class="sr-only"></span></a>
                </li>
                </ul>
            </div>
        </nav>
        <div class ="container mt-5">
            
            <div class="row">
                <div class="col-md-4">
                    <h3>Registrar producto</h3>
                    <form action="insert.php" method="POST">
                        Codigo: 
                        <input type="text" pattern="[A-Za-z0-9ñÑ]+" minlength="4" maxlength="10" class="form-control mb-3" name="code" placeholder="Digite el codigo" oninvalid="this.setCustomValidity('No incluir caracteres especiales ni espacios, min 4 caracteres max 10 caracteres')" required>
                        Nombre: 
                        <input type="text" minlength="4" class="form-control mb-3" name="name" placeholder="Digite el nombre" required>
                        Descripccion: 
                        <input type="text" class="form-control mb-3" name="description" placeholder="Digite la descripccion" required>
                        Marca: 
                        <input type="text" class="form-control mb-3" name="brand" placeholder="Digite la marca" required>
                        Precio: 
                        <input type="text" pattern="[0-9,.]+" class="form-control mb-3" name="price" placeholder="Digite el precio" oninvalid="this.setCustomValidity('Digite solo numeros')"required>
                        Fecha de creacion: 
                        <input type="date" value="<?php echo $fcha;?>" min="2019-01-01" max="2023-12-31"  class="form-control mb-3" name="createdAt" placeholder="Digite la fecha">
                        Fecha de actualizacion: 
                        <input type="date" value="<?php echo $fcha;?>" min="2019-01-01" max="2023-12-31" class="form-control mb-3" name="updatedAt" placeholder="Digite la fecha">
                        Categoria: 
                        <input type="text" pattern="[0-9]+" class="form-control mb-3" name="categoryCode" placeholder="Digite la categoria" oninvalid="this.setCustomValidity('Digite solo numeros')"required>
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
                <div class="col-md-8">
                    <h3 style="text-align:center" >Productos Registrados</h3>
                    <table class="table">
                        <thead style="background-color:	rgb(215, 219, 221 );">
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Descripccion</th>
                                <th>Marca</th>
                                <th>Precio</th>
                                <th>Fecha creacion</th>
                                <th>Fecha Actualizacion</th>
                                <th></th>
                                <th></th>                              
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if($query ->num_rows > 0) {
                                foreach ($query as $row){
                            ?>
                            <tr>
                                <td><?php echo $row['code']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['description']?></td>
                                <td><?php echo $row['brand']?></td>
                                <td><?php echo $row['price']?></td>
                                <td><?php echo $row['createdAt']?></td>
                                <td><?php echo $row['updatedAt']?></td>
                                <td><a href="actualizar.php?id=<?php echo $row['code']?>" class="btn btn-info" style="background-color:	rgb(133, 146, 158)">Editar</a></td>
                                <td><a href="delete.php?id=<?php echo $row['code']?>" onclick="return confirm('Estás segura de que quieres eliminar este producto?');" style="background-color:	rgb(169, 50, 38 )" class="btn btn-danger">Eliminar</a></td>
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