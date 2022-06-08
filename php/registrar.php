<?php
include "conexion.php"; 

$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$insertar = "INSERT INTO usuario(nombre, apellido1, apellido2, email, contrasena, usuario) 
VALUES ('$nombre', '$apellido1', '$apellido2', '$email', '$contrasena', '$usuario')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE email = '$email'");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '<script>
            alert("El correo ya ha sido registrado!");
            window.history.go(-1);
          </script>';
    exit;
}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario = '$usuario'");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '<script>
            alert("El usuario ya ha sido registrado!");
            window.history.go(-1);
          </script>';
    exit;
}

$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
    echo 'Error al registrarse. ';
}else{
    echo '<script>
            alert("Usted ha sido registrado correctamente");
            window.history.go(-1);
          </script>';
}

mysqli_close($conexion);
?>