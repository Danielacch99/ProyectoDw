<?php

    include "conexion.php";

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $disponibilidad = $_POST['disponibilidad'];
    $cantidad = $_POST['cantidad']; 
    $tallas = $_POST['tallas'];
    $nombre_imagen = $_FILES['imagen']['name'];
    $tipo_imagen = $_FILES['imagen']['type'];
    $tamagno_imagen = $_FILES['imagen']['size'];
    
    $consulta = "UPDATE producto SET nombreProducto = '$nombre',
                                      precio = '$precio', 
                                      descripcion = '$descripcion',
                                      disponibilidad = '$disponibilidad',
                                      cantidad = '$cantidad',
                                      talla = '$tallas',
                                      imagen = '$nombre_imagen' WHERE id_producto = '$id'"; 
    
    $resultado = mysqli_query($conexion, $consulta);


    if(!$resultado){
        echo '<script>
                alert("El producto no ha podido ser actualizado.");
                window.history.go(-1);
              </script>';
        
    }else{
        echo '<script>
        alert("EL producto se ha actualizado.");
        window.location.href = ../HTML/EditarProductos.php;
        </script>';
    }

    mysqli_close($conexion);

?>

