<?php

include("conexion.php");
$con=conectar();

$idjugador=$_GET['id'];

$sql="DELETE FROM jugador  WHERE idjugador='$idjugador'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: jugador.php");
    }
?>
