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


$sql="UPDATE equipo SET nombre_equipo='$nombre_equipo',pais='$pais', copas='$copas', partidos='$partidos',clubes='$clubes',jugadores='$jugadores' WHERE idequipo='$idequipo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: juegos.php");
    }
    else{
        echo "error";}
?>