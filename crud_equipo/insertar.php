<?php
include("conexion.php");
$con=conectar();

$idequipo=$_POST['idequipo'];
$nombre_equipo=$_POST['nombre_equipo'];
$pais=$_POST['pais'];
$copas=$_POST['copas'];
$partidos=$_POST['partidos'];
$clubes=$_POST['clubes'];
$jugadores=$_POST['jugadores'];


$sql="INSERT INTO `equipo` VALUES('$idequipo','$nombre_equipo','$pais','$copas','$partidos','$clubes','$jugadores')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: equipo.php");
    
}else {
    echo "error";
}
?>