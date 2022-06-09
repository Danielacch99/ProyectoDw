<?php

    include "conexion.php";

    $nombre = $_GET['nombre'];
    
    $consultaSelect = "SELECT * FROM producto WHERE nombreProducto = '$nombre'";
    $consultaDelete = "DELETE FROM producto WHERE nombreProducto = '$nombre'";
    
    $resultadoSelect = mysqli_query($conexion, $consultaSelect);
    $resultadoDelete = mysqli_query($conexion, $consultaDelete);

    if(!$resultadoDelete){
        echo '<script>
                alert("El producto no ha podido ser eliminado");
                window.history.go(-1);
              </script>';
        
    }else{
        echo unlink("../Img/".mysqli_fetch_assoc($resultadoSelect)['imagen']);
        echo '<script>
        alert("EL producto se ha eliminado.");
        window.history.go(-1);
        </script>';
    }

    mysqli_close($conexion);

?>

