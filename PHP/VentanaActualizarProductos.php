<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleGeneral.css">
    <link rel="stylesheet" href="../css/styleRegistroNuevosProductos.css">
    <title>Pequeño regalo gran sonrisa</title>
</head>
<body>
    <header>
        <div id="logoPagina">
            <a href="../index.html" class="logoPagina"><img src="../Img/logoPagina.png" alt="logoPagina"></a>
        </div>
        <div id="nombrePagina">
            <p>Pequeño regalo Gran sonrisa</p>
        </div>
        
    </header>
    <div class="SeccionPrincipalRegistrarNuevosProductos">
        <main>

            <h2>
                Actualizar productos 
            </h2>

            <?php

                include "conexion.php";

                $nombre = $_GET['nombre'];

                $consultaSelect = "SELECT * FROM producto WHERE nombreProducto = '$nombre'";
                

                $resultadoSelect = mysqli_query($conexion, $consultaSelect);
        

                $row = mysqli_fetch_assoc($resultadoSelect);


                mysqli_close($conexion);

            ?>

            <div class="Contenedor">
                <form action="../PHP/ActualizarProducto.php" method="post" enctype="multipart/form-data">
                    <label> ID*: </label><br>
                    <input type="text" name="id" value="<?php echo $row['id_producto'];?> " readonly><br><br>
                    <label> Nombre: </label><br>
                    <input type="text" name="nombre" required value="<?php echo $row['nombreProducto'];?> "><br><br>
                    <label>Precio: </label ><br>
                    <input type="number" name="precio" required value=<?php echo $row['precio'];?> ><br><br>
                    <label>Disponibilidad: </label ><br>
                    <input type="number" name="disponibilidad" required  value=<?php echo $row['disponibilidad'];?>><br><br>
                    <label>Cantidad: </label ><br>
                    <input type="number" name="cantidad" required value=<?php echo $row['cantidad'];?>><br><br>
                    <label>tallas: </label ><br>
                    <input type="text" name="tallas" value="<?php echo $row['talla'];?> "><br><br>
                    <label>Imagen: </label ><br>
                    <input type="file" name="imagen" size="20" value="../Img/<?php echo $row['imagen'];?> ">
                    <label>Descripcion: </label ><br>
                    <textarea name="descripcion" rows="10" cols="50"><?php echo $row['descripcion'];?></textarea><br>
                    <input class="boton "type="submit" name="boton" value="Actualizar producto" id="boton" required><br><br>
                </form>
            </div>
        </main>
    </div>
     
    <footer>
        <a href="../index.html" ><p>© 2022 SANRIO CO., LTD.  All Rights Reserved.</p></a>
    </footer>
</body>
</html>