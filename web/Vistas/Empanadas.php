<!DOCTYPE HTML>
<html lang="ES" >
     <head>
       <meta charset="utf-8"/>
       <title>Stock de empanadas</title>
     
       <meta name="description" content="Fabrica de tapas de empanadas y Pascualinas"/>
       <meta name="author" content="Rosamrl"/>
      <meta name="keywords" content="empanadas, tapas, pascualinas, dorada, crocante"/>
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
                  <li><a href="Distribuidores.php">Contacto</a></li>
                  <li><a href="Salir.php">Cerrar Sesión</a</li>
              
                </ul>
           </nav>


      </header>
       
       
        

        
        <h2> La Dorada</h2>
        <h1> TAPAS DE EMPANADAS</h1>
        <p>Las tapas de empanadas vienen en dos categorias Horno y para Freir</p> </br> </br> </br>
        <!--<div style="width:1500px; height:100px;">
                
                  <a href="Emp.Criollas.html"><img src="Images/paqueteempanadas.jpg" style="float: left; margin:  0 50px;"/> </a>
                  
                  <a href="Emp.Hojaldre.html"><img src="Images/paqueteempanadas.jpg" style="float: left;margin:  0 80px; "/></a>
                   
                 <a href="Emp.Copetines.html"><img src="Images/paqueteempanadas.jpg" style="float: left;margin: 0 80px;  "/></a>
                 
                 <a href="Emp.Salvado.html"><img src="Images/paqueteempanadas.jpg" style="float: right "/></a>
        </div> -->
         
        

        
        
        

             <script src = "js/IniciarSesion.js"></script> 

    </body>    

    
<?php 

$mostrar = new ProductosC();
$mostrar -> MostrarProductosC();

?>






</html>     
