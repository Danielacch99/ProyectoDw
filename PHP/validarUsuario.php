<?php

include 'conexion.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$consulta = "SELECT * FROM usuario WHERE (usuario = '$usuario' or email = '$usuario') and contrasena = '$contrasena'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas > 0){
    echo '<script>
            alert("Bienvenido!");
            window.history.go(-1);
          </script>';
          exit;
}else{
    echo '<script>
            alert("El usuario o la contraseña son incorrecto o no está registrado!");
            window.history.go(-1);
          </script>';
          exit;
}


?>