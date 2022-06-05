<?php /*
require_once "../Controlador/usuarioC.php";
require_once "../Modelo/usuarioM.php";

require_once "../Controlador/distribuidoresC.php";
require_once "../Modelo/distribuidoresM.php";

?>



<?php
     $Servidor= "localhost";
     $usuario='root';
     
     $basededatos= "Formularios";

     $Enlacce= mysqli_connect($Servidor, $usuario, $basededatos);
     if (!$enlace){
       echo"Error en la conexión con el servidor";
     }
?>



<!DOCTYPE HTML>
<html lang="ES" >
     <head>
       <meta charset="utf-8"/>
       <title>DISTRIBUIDORES </title>
       <meta name="description" content="Fabrica de tapas de empanadas y Pascualinas"/>
       <meta name="author" content="Rosamrl"/>
      <meta name="keywords" content="empanadas, tapas, pascualinas, dorada, crocante"/>
      <link rel="shortcut icon" href="Images/Empanada feliz.png" type="image/x-icon">
      
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
                  <li><a href="Distribuidores.php">Contacto</a></li>
                  <li><a href="#">Cerrar Sesión</a></li>
              
                </ul>
           </nav>




    </header>




   
    <p align = "center">Estimado cliente para poder comprar necesita registrarse <a href="IniciarSesion.html">Aquí</a></p>

  </body>    

</html>     


<?php 

$registrar = new registroUsuarioC();
$registrar -> registroUsuarios();


*/?>