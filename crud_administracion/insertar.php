<?php
include("conexion.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$puesto=$_POST['puesto'];
$equipo=$_POST['equipo'];
$asociacion=$_POST['asociacion'];


$sql="INSERT INTO `administracion` VALUES('$idempleado','$nombre','$apellido','$edad','$puesto','$equipo','$asociacion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: administracion.php");
    
}else {
    echo "error";
}
?>