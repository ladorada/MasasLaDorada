<?php
require_once "../Controlador/productosC.php";
require_once "../Modelo/productosM.php";

require_once "../Controlador/registroUsuarioC.php";
require_once "../Modelo/RegistroUsuarioM.php";

?>

<?php

require_once "../Controlador/usuarioC.php";
require_once "../Modelo/usuarioM.php";

session_start();

if (!$_SESSION["Ingreso"]) {

  echo '<h1 style="color:#d9ad26;text-align:center;background-color:#bbd1ea">Por favor registrate primero</h1>';
  echo "<script>setTimeout(\"location.href = 'Registro.php';\",1200);</script>";
  exit();
}

?>

<!DOCTYPE HTML>
<html lang="ES">

<head>
  <meta charset="utf-8" />
  <title>Comprar producto</title>
  <meta name="description" content="Fabrica de tapas de empanadas y Pascualinas" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
        <li><a href="Contaco.php">Contacto</a></li>
        <li><a href="Carrito.php">Carrito de compras</a></li>
        <li><a href="Salir.php">Cerrar Sesión</a></li>

      </ul>
    </nav>

  </header>



  <div class="cont_principal">

    <div class="cont_centrar">
      <div class="cont_login">
        <form method="post" action="Comprar.php">

          <?php

          $editar = new productosC();
          $editar->editarProductosC();

          $actualizarProductos = new productosC();
          $actualizarProductos->actualizarStockC();

          $actualizarUsuario = new registroUsuarioC();
          $actualizarUsuario->actualizarUsuarioC();


          ?>

        </form>
      </div>

    </div>


  </div>


</body>

</html>