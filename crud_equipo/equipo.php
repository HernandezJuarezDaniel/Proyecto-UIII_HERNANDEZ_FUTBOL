<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM equipo";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CRUD JUGADORES</title>
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

                                    <input type="text" class="form-control mb-3" name="idequipo" placeholder="Id Equipo">
                                    <input type="text" class="form-control mb-3" name="nombre_equipo" placeholder="Nombre Equipo">
                                    <input type="text" class="form-control mb-3" name="pais" placeholder="Pais">
                                    <input type="text" class="form-control mb-3" name="copas" placeholder="Copas">
                                    <input type="text" class="form-control mb-3" name="partidos" placeholder="Partidos">
                                    <input type="text" class="form-control mb-3" name="clubes" placeholder="Clubes">
                                    <input type="text" class="form-control mb-3" name="jugadores" placeholder="Jugadores">

                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id Equipo</th>
                                        <th>Nombre Equipo</th>
                                        <th>Pais</th>
                                        <th>Copas</th>
                                        <th>Partidos</th>
                                        <th>Clubes</th>
                                        <th>Jugadores</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idequipo']?></th>
                                                <th><?php  echo $row['nombre_equipo']?></th>
                                                <th><?php  echo $row['pais']?></th>
                                                <th><?php  echo $row['copas']?></th>
                                                <th><?php  echo $row['partidos']?></th>
                                                <th><?php  echo $row['clubes']?></th>   
                                                <th><?php  echo $row['jugadores']?></th>      
                                                <th><a href="actualizar.php?id=<?php echo $row['idequipo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idequipo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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