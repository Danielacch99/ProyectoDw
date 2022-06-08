<?php

    include "conexion.php";

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $disponibilidad = $_POST['disponibilidad'];
    $cantidad = $_POST['cantidad']; 
    $tallas = $_POST['tallas'];
    $nombre_imagen = $_FILES['imagen']['name'];
    $tipo_imagen = $_FILES['imagen']['type'];
    $tamagno_imagen = $_FILES['imagen']['size'];

    
    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . "/ProyectoFinalDw/Img/";

    move_uploaded_file($_FILES ['imagen'] ['tmp_name'], $carpeta_destino.$nombre_imagen);

    $consulta = "INSERT INTO producto(nombreProducto, precio, descripcion, disponibilidad, cantidad, talla, imagen) 
        VALUES('$nombre', '$precio', '$descripcion', '$disponibilidad', '$cantidad', '$tallas', '$nombre_imagen')";
    
    $resultado = mysqli_query($conexion, $consulta);

    if(!$resultado){
        echo '<script>
                alert("Ha ocurrido un error");
                window.history.go(-1);
              </script>';
    }else{
        echo '<script>
                alert("EL producto se ha registrado exitosamente.");
                window.history.go(-1);
            </script>';
    }

    mysqli_close($conexion);

?>