<?php

include("conexion.php");
$con=conectar();

$idjuego=$_GET['id'];

$sql="DELETE FROM juegos  WHERE idjuego='$idjuego'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: juegos.php");
    }
?>
