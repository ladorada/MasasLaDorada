<?php 

session_start();

session_destroy();
?>


<!DOCTYPE HTML>
<html lang="ES" >
    <head>
          <meta charset="utf-8"/>
          <title>Cerrar Sesión</title>
          <meta name="description" content="Fabrica de tapas de empanadas y Pascualinas"/>
          
           <meta name="author" content="Rosamrl"/>
           <meta name="keywords" content="empanadas, tapas, pascualinas, dorada, crocante"/>
             <link rel="shortcut icon" href="Images/Empanada feliz.png" type="image/x-icon">
             <LINK REL=StyleSheet HREF="CSS/Master.css" TYPE="text/css" MEDIA=screen>
             </head>
    <body>       
      <header>
                <h1>La Dorada</h1>
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
                         <li><a href="Salir.php">Cerrar Sesión</a></li>
              
                      </ul>
                 </nav>

      </header>
  

      <h1 style="color:#A41D7B;text-align:center">Sesión cerrada de forma exitosa</h1>
        
    </body>    
          
          
          
</html>     
