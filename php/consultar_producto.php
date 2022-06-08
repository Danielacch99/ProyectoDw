<?php

include 'conexion.php';

$nombre = str_replace("/", "\", "C:/xampp/htdocs/ProyectoDw/Img/accesorios.jpeg"); //$_POST['nombre'];

$consulta = "SELECT * FROM producto WHERE nombre = '$nombre'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas > 0){
    echo $resultado;
          exit;
}else{
    echo '<script>
            alert("El usuario o la contraseña son incorrecto o no está registrado!");
            window.history.go(-1);
          </script>';
          exit;
}


?>