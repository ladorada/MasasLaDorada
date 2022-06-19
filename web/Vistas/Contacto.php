<?php 
require_once "../Controlador/usuarioC.php";
require_once "../Modelo/usuarioM.php";

require_once "../Controlador/registroUsuarioC.php";
require_once "../Modelo/RegistroUsuarioM.php";

require_once "../Controlador/contactoC.php";
require_once "../Modelo/contactoM.php";

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
     
      <body2>
          <header>
                <h1> La Dorada</h1>  <!--<img src="Images/logofeliz.png" align ="right" width = "55" height = "55"/> -->

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
                  <li><a href="Salir.php">Cerrar Sesión</a</li>
              
                </ul>
           </nav>



        </header>
       
        <form method="post" action="Contacto.php" class="formulario">
            <h1 class="formulario__titulo">Contácto Clientes</h1>
            <input type="text" class="formulario__input" name="nombre">
            <label for="" class="formulario__label">Nombre o Razón Social</label>
            <input type="text" class="formulario__input" name="correo">
            <label for="" class="formulario__label">Correo</label>
            <input type="number" class="formulario__input" name="telefono">
            <label for="" class="formulario__label">Teléfono</label>
            <input type="text" class="formulario__input" name="direccion">
            <label for="" class="formulario__label">Dirección</label>
            <input type="text" class="formulario__input" name="mensaje">
            <label for="" class="formulario__label">Mensaje</label>
            <input type="submit" class="formulario__submit" value="Enviar"/>

        </form>
        </br> </br>

        <script src = "js/IniciarSesion.js"></script> 

        <p align = "left">Estimado cliente para poder comprar necesita registrarse <a href="IniciarSesion.html">Aquí</a></p>
    </body2>   
       
    
    
    

</html>  

<?php 

$registrar = new contactoC();
$registrar -> registroContacto();


?>