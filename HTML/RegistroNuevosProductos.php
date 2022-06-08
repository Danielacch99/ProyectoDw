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
                Registro de productos nuevos
            </h2>

            <div class="Contenedor">
                <form action="../PHP/registrarProducto.php" method="post" enctype="multipart/form-data">
                    <label> Nombre: </label><br>
                    <input type="text" name="nombre" required><br><br>
                    <label>Precio: </label ><br>
                    <input type="number" name="precio" required><br><br>
                    <label>Disponibilidad: </label ><br>
                    <input type="number" name="disponibilidad" required><br><br>
                    <label>Cantidad: </label ><br>
                    <input type="number" name="cantidad" required><br><br>
                    <label>tallas: </label ><br>
                    <input type="text" name="tallas" ><br><br>
                    <label>Imagen: </label ><br>
                    <input type="file" name="imagen" size="20">
                    <label>Descripcion: </label ><br>
                    <textarea name="descripcion" rows="10" cols="50"></textarea><br>
                    <input class="boton "type="submit" name="boton" value="registrar producto" id="boton" required><br><br>
                </form>
            </div>
        </main>
    </div>
     
    <footer>
        <a href="../index.html" ><p>© 2022 SANRIO CO., LTD.  All Rights Reserved.</p></a>
    </footer>
</body>
</html>