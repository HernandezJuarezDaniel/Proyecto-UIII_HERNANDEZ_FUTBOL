<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM juegos WHERE idjuego='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="idjuego" value="<?php echo $row['idjuego']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="equipos" placeholder="equipos" value="<?php echo $row['equipos']  ?>">
                                <input type="text" class="form-control mb-3" name="copa" placeholder="copa" value="<?php echo $row['copa']  ?>">
                                <input type="text" class="form-control mb-3" name="resultados" placeholder="resultados" value="<?php echo $row['resultados']  ?>">
                                <input type="text" class="form-control mb-3" name="pais" placeholder="pais" value="<?php echo $row['pais']  ?>">
                                <input type="text" class="form-control mb-3" name="organizacion" placeholder="organizacion" value="<?php echo $row['organizacion']  ?>">
                                <input type="text" class="form-control mb-3" name="patrocinadores" placeholder="patrocinadores" value="<?php echo $row['patrocinadores']  ?>">
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>