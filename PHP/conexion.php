<?php
   $usuario = "root";
   $contrasena = "";
   $server = "localhost";
   $db = "pequeñoregalogransonrisa";

   $conexion = mysqli_connect($server, $usuario, $contrasena, $db);

   if(!$conexion){
      echo "Error al conectar a la base datos.";
   }else{
      #echo "Conectado a la base de datos"; 
   }
?>
