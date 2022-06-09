<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleGeneral.css">
    <link rel="stylesheet" href="../css/styleaEditarProductos.css">
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
    
        <div class="SeccionPrincipal"> 

        <main>
            <?php
                include("../PHP/conexion.php");
                $consulta = "SELECT * FROM producto";
                $resultado = mysqli_query($conexion, $consulta);
                
                while($row=mysqli_fetch_assoc($resultado)){
            ?>

                <div id="main_container">
                    <table>
                                
                        <tr>
                            <td><?php echo $row['nombreProducto']; ?></td>
                            <td><img src="../Img/<?php echo $row['imagen']; ?>" width="50px"></td>
                            <td><a href="../PHP/EliminarProducto.php?nombre=<?php echo $row['nombreProducto']; ?>">Eliminar</a></td> 
                            <td><a href="../PHP/VentanaActualizarProductos.php?nombre=<?php echo $row['nombreProducto']; ?>">Actualizar</a></td> 
                        </tr>
                        
                    </table>
                </div>

            
            <?php }?>
            
          
</main>    
    </main>
    <footer>
        <a href="../index.html" ><p>© 2022 SANRIO CO., LTD.  All Rights Reserved.</p></a>
    </footer>
</body>
</html>