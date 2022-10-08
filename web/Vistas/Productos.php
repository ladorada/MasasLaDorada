<?php
require_once "../Controlador/usuarioC.php";
require_once "../Modelo/usuarioM.php";

require_once "../Controlador/registroUsuarioC.php";
require_once "../Modelo/RegistroUsuarioM.php";

require_once "../Controlador/productosC.php";
require_once "../Modelo/productosM.php";

?>

<!DOCTYPE HTML>
<html lang="ES">

<head>
       <meta charset="utf-8" />
       <title>NUESTROS PRODUCTOS</title>
       <meta name="description" content="Fabrica de tapas de empanadas y Pascualinas" />

       <meta name="keywords" content="empanadas, tapas, pascualinas, dorada, crocante" />
       <link rel="shortcut icon" href="Images/Empanada feliz.png" type="image/x-icon">
       <LINK REL=StyleSheet HREF="CSS/Master.css" TYPE="text/css" MEDIA=screen>
</head>

<body>

       <header>
              <h1> La Dorada</h1>
              <nav class="navegacion">
                     <ul class="menu">
                            <li><a href="IniciarSesion.php">Iniciar Sesión</a></li>
                            <li><a href="Index.php">Inicio</a></li>
                            <li><a href="Nosotros.php">Nosotros</a></li>
                            <li><a href="Productos.php">Productos</a></li>
                            <ul class="submenu">
                                   <li><a href="Empanadas.php">Tapas de empanadas</a></li>
                                   <li><a href="Pascualina.php">Tapas de pascualinas</a></li>

                            </ul>

                            <li><a href="Contactodist.php">Distribuidores</a></li>
                            <li><a href="Contacto.php">Contacto</a></li>
                            <li><a href="Carrito.php">Carrito de compras</a></li>
                            <li><a href="Salir.php">Cerrar Sesión</a></li>

                     </ul>
              </nav>



       </header>



       <h1 align="center">La Dorada</h1>
       <img style="display:block;margin:0 auto 0 auto;" src="Images/Tapas.jpg" alt="descripción" width="200" height="150" />

       </br>


       <h3 align="center">Bienvenidos a la Dorada las tapas de empanadas y pascualinas más ricas del país.</h3>
       </br></br>
       <h3 align="center">Nuestros productos son:</h3>

       <div align="center">
       <table class="cent_active" border="1">
              <thead>
                     <tr>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Comprar</th>
                     </tr>
              </thead>

              <tbody>
                     <?php

                     $mostrar = new productosC();
                     $mostrar->mostrarProductosC();

                     ?>
              </tbody>
       </table></div>
       <br>
       <br>
       <p align="center">Estimado cliente para poder comprar necesita registrarse <a href="Registro.php">Aquí</a></p>




</body>

</html>
