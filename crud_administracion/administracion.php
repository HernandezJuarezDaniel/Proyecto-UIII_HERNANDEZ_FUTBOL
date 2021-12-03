<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM administracion";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CRUD ADMINISTRACION</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese los Datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="idempleado" placeholder="Id Empleado">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="Edad">
                                    <input type="text" class="form-control mb-3" name="puesto" placeholder="Puesto">
                                    <input type="text" class="form-control mb-3" name="equipo" placeholder="Equipo">
                                    <input type="text" class="form-control mb-3" name="asociacion" placeholder="Asociacion">

                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id Empleado</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Edad</th>
                                        <th>Puesto</th>
                                        <th>Equipo</th>
                                        <th>Asociacion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idempleado']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['edad']?></th>
                                                <th><?php  echo $row['puesto']?></th>
                                                <th><?php  echo $row['equipo']?></th>   
                                                <th><?php  echo $row['asociacion']?></th>      
                                                <th><a href="actualizar.php?id=<?php echo $row['idempleado'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idempleado'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                               
                            </table>
                           
                        </div>
                    </div>
                    <a href="../index.php">INICIO</a>
            </div>
    </body>
</html>