<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM juegos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CRUD JUEGOS</title>
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

                                    <input type="text" class="form-control mb-3" name="idjuego" placeholder="Id Juego">
                                    <input type="text" class="form-control mb-3" name="equipos" placeholder="Equipos">
                                    <input type="text" class="form-control mb-3" name="copa" placeholder="Copa">
                                    <input type="text" class="form-control mb-3" name="resultados" placeholder="Resultados">
                                    <input type="text" class="form-control mb-3" name="pais" placeholder="Pais">
                                    <input type="text" class="form-control mb-3" name="organizacion" placeholder="Organizacion">
                                    <input type="text" class="form-control mb-3" name="patrocinadores" placeholder="Patrocinadores">

                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id Juego</th>
                                        <th>Equipos</th>
                                        <th>Copa</th>
                                        <th>Resultados</th>
                                        <th>Pais</th>
                                        <th>Organizacion</th>
                                        <th>Patrocinadores</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idjuego']?></th>
                                                <th><?php  echo $row['equipos']?></th>
                                                <th><?php  echo $row['copa']?></th>
                                                <th><?php  echo $row['resultados']?></th>
                                                <th><?php  echo $row['pais']?></th>
                                                <th><?php  echo $row['organizacion']?></th>   
                                                <th><?php  echo $row['patrocinadores']?></th>      
                                                <th><a href="actualizar.php?id=<?php echo $row['idjuego'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idjuego'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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