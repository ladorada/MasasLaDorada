<?php 
require_once "../Controlador/usuarioC.php";
require_once "../Modelo/usuarioM.php";

require_once "../Controlador/registroUsuarioC.php";
require_once "../Modelo/RegistroUsuarioM.php";

?>


<!DOCTYPE HTML>
<html lang="ES" >
     <head>
         <meta charset="utf-8"/>
         <title>INICIO</title>
       
         <meta name="description" content="Fabrica de tapas de empanadas y Pascualinas"/>
         <meta name="author" content="Rosamrl"/>
         <meta name="keywords" content="empanadas, tapas, pascualinas, dorada, crocante"/>
     
         <link rel="shortcut icon" href="Images/Empanada feliz.png" type="image/x-icon">
         <LINK REL=StyleSheet HREF="CSS/Master.css" TYPE="text/css" MEDIA=screen>
     </head>
     
      <body>
        <header>
            <h1>La Dorada</h1>  <!--<img src="Images/logofeliz.png" align ="right" width = "55" height = "55"/> -->

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
                <li><a href="#">Cerrar Sesión</a></li>
            
            </ul>
          </nav> 



        </header>
       
       <div class="bienv">/
        
                  <h1 align = "center">Recupera tu contraseña</h1>

       </div>    

</html>     
