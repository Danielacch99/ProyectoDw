<?php

$user = "root";
$password = "";
$server = "localhost";
$db = "pequeñoregalogransonrisa";

$conexion = mysqli_connect($server, $user, $password, $db);

if($conexion ->connect_error){
    die("Falló la conexión: ".$conexion->connect_error);
}else{
    
}

?>