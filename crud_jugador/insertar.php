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


$sql="INSERT INTO `jugador` VALUES('$idjugador','$nombre','$apellido','$equipo','$pais','$edad','$partidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: jugador.php");
    
}else {
}
?>