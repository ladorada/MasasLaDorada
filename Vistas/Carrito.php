<?php

require_once "../Controlador/usuarioC.php";
require_once "../Modelo/usuarioM.php";

require_once "../Controlador/registroUsuarioC.php";
require_once "../Modelo/RegistroUsuarioM.php";

session_start();

if (!$_SESSION["Ingreso"]) {

    echo '<h1 style="color:#d9ad26;text-align:center;background-color:#bbd1ea">Por favor registrate primero</h1>';
    echo "<script>setTimeout(\"location.href = 'Registro.php';\",1200);</script>";
    exit();
}

?>


<!DOCTYPE HTML>
<html lang="ES" >

     <head>
         <meta charset="utf-8"/>
         <title>Carrito de compras</title>
       
         <meta name="description" content="Fabrica de tapas de empanadas y Pascualinas"/>
         <meta name="author" content="Rosamrl"/>
         <meta name="keywords" content="empanadas, tapas, pascualinas, dorada, crocante, ecommerce"/>
         <script src="https://sdk.mercadopago.com/js/v2"></script>
         <link rel="shortcut icon" href="Images/Empanada feliz.png" type="image/x-icon">
         <LINK REL=StyleSheet HREF="CSS/Master.css" TYPE="text/css" MEDIA=screen>
     </head>
     
      <body2>
          <header>
                <h1>Bienvenido al carrito de compras</h1> 

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
                  <li><a href="Salir.php">Cerrar Sesión</a></li>
              
                </ul>
           </nav>



        </header>


<div align="center">
       <table class="cent_active" border="1">
              <thead>
                     <tr>
                            <th>Cantidad de Pascualina Integral</th>
                            <th>Cantidad de Pascualina Criolla</th>
                            <th>Cantidad de Masa de empanadas Hojaldre</th>
                            <th>Cantidad de Masa de empanadas Criollas</th>
                            <th>Cantidad de Masa de empanadas Copetines</th>
                            <th>Cantidad de Copetin de Hojaldre</th>
                     </tr>
              </thead>

              <tbody>
                     <?php

$mostrar = new registroUsuarioC();
$mostrar->mostrarCarritoC();

                     ?>
              </tbody>
       </table></div>


       <div class="cont_principal">
        <form method="post">
          <input type="submit" class="btn_sign" value="Comprar">

        </form>
      </div>

    </div>

    </body2>     
</html>  

