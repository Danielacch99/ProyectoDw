<?php
include "conexion.php"; 

$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


$insertar = "INSERT INTO cliente(nombreCliente, Apellido1, Apellido2, usuario, contrasenia, direccion, fotoPerfil, correoElectronico, telefono) 
VALUES ('$nombre', '$apellido1', '$apellido2', '$usuario', '$contrasena', '', '', '$email', 1234567890)";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM cliente WHERE correoElectronico = '$email'");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '<script>
            alert("El correo ya ha sido registrado!");
            window.history.go(-1);
          </script>';
    exit;
}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM cliente WHERE usuario = '$usuario'");

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