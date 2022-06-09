<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleGeneral.css">
    <link rel="stylesheet" href="../css/styleVentanaProd.css">
    <link rel="stylesheet" href="../CSS/styleVentanaProd.css?v=<?php echo(rand()); ?>" />
    <script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
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
    <nav>
        <a href="../HTML/LoNuevo.html">Lo nuevo</a>
        <a href="../HTML/CatalogoAccesorios.html">Accesorios</a>
        <a href="../HTML/CatalogoDecoracion.html">Decoración</a>
        <a href="../HTML/CatalogoRopa.html">Ropa</a>
        <a href="../HTML/CatalogoZapatos.html">Zapatos</a>
        <a href="../HTML/InicioSesion.html">Inicio / Registro Sesión</a>
     
    </nav>
    
    
        <div class="SeccionPrincipal"> 

        <main>
        

            <?php
                include("../PHP/conexion.php");
                $imagen = $_GET['imagen'];
                $consulta = "SELECT * FROM producto WHERE imagen = '$imagen' ";
                $resultado = mysqli_query($conexion, $consulta);
                $row=mysqli_fetch_assoc($resultado);

                

               
           

            ?>

                <div class="producto">
                    <img src="../Img/<?php echo $row['imagen']; ?>" alt="">
                </div>
                    
                <div class="informacion_producto">
                   <h1>Infomación del producto: </h1>
                   <p><?php echo $row['descripcion']; ?></p>
                   <p>$<?php echo $row['precio']; ?></p>
                   <p>Disponibilidad: <?php echo $row['cantidad']; ?></p>
                </div>
    
</main>    
    </main>
    <footer>
        <a href="../index.html" ><p>© 2022 SANRIO CO., LTD.  All Rights Reserved.</p></a>
    </footer>
</body>
</html>