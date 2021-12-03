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


$sql="UPDATE administracion SET nombre='$nombre',apellido='$apellido', edad='$edad', puesto='$puesto',equipo='$equipo',asociacion='$asociacion' WHERE idempleado='$idempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: administracion.php");
    }
    else{
        echo "error";}
?>