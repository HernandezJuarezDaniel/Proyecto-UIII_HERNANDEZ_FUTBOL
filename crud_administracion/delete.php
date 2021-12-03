<?php

include("conexion.php");
$con=conectar();

$idequipo=$_GET['id'];

$sql="DELETE FROM equipo  WHERE idequipo='$idequipo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: equipo.php");
    }
?>
