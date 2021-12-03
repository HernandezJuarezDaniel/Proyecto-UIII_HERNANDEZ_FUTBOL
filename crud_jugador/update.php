<?php

include("conexion.php");
$con=conectar();

$idjugador=$_POST['idjugador'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$equipo=$_POST['equipo'];
$pais=$_POST['pais'];
$partidos=$_POST['partidos'];

$sql="UPDATE jugador SET nombre='$nombre',apellido='$apellido', edad='$edad', equipo='$equipo', pais='$pais',partidos='$partidos' WHERE idjugador='$idjugador'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: jugador.php");
    }
    else{
        echo "error";}
?>