<?php
include("conexion.php");
$con=conectar();

$idjuego=$_POST['idjuego'];
$equipos=$_POST['equipos'];
$copa=$_POST['copa'];
$resultados=$_POST['resultados'];
$pais=$_POST['pais'];
$organizacion=$_POST['organizacion'];
$patrocinadores=$_POST['patrocinadores'];


$sql="INSERT INTO `juegos` VALUES('$idjuego','$equipos','$copa','$resultados','$pais','$organizacion','$patrocinadores')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: juegos.php");
    
}else {
    echo "error";
}
?>