<?php 
require_once "../Controlador/usuarioC.php";
require_once "../Modelo/usuarioM.php";

require_once "../Controlador/registroUsuarioC.php";
require_once "../Modelo/RegistroUsuarioM.php";

?>


<!DOCTYPE HTML>
<html lang="ES">

<head>
  <meta charset="utf-8" />
  <title>Iniciar Sesion</title>
  <meta name="description" content="Fabrica de tapas de empanadas y Pascualinas" />

  <meta name="author" content="Rosamrl" />
  <meta name="keywords" content="empanadas, tapas, pascualinas, dorada, crocante" />
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
        <li><a href="Contacto.php">Contacto</a></li>
        <li><a href="Salir.php">Cerrar Sesión</a></li>

      </ul>
    </nav>

  </header>

  <div class="cont_principal">


    <div class="cont_centrar">
      <div class="cont_login">
        <form method="post">


          <input type="text" class="input_form_sign d_block active_inp" placeholder="EMAIL" name="email_i" required>
          <input type="password" class="input_form_sign d_block  active_inp" placeholder="CONTRASEÑA" name="pass_i" required>
          <div class="cont_btn">
          <input type="submit" class="btn_sign" value="Ingresar">
          <a href="recuperarContrasena.php" class="link_forgot_pass d_block" >¿Olvidaste la contraseña?</a>
            <a href="Registro.php" class="link_forgot_pass d_block" >¿Aún no estás registrado? ¡Regístrate!</a>
            <!--- <button class="btn_sign">Ingresar</button> -->

          </div>
        </form>
      </div>

    </div>


  </div>


  <!--- <script src = "js/IniciarSesion.js"></script> -->


</body>



</html>

<?php


$ingreso = new UsuarioC();
$ingreso->IngresoC();

?>
