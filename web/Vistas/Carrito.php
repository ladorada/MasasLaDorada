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
                            <th>Costo total de los productos</th>
                     </tr>
              </thead>

              <tbody>
                     <?php

$mostrar = new registroUsuarioC();
$mostrar->mostrarCarritoC();

$valor = new registroUsuarioC();
$valor =$valor->mostrarDeudaC();
$valor = $valor[0];
$valor = strval($valor);
$correo = $_SESSION['email_i'];
$correo = strval($correo);

// Datos para produccion
//$apikey = "6wtkVpzQ465nyIXmRY1rCJQF47";
//$mearchantid = "973442";
//$reference="TestPayU";

// Datos para prueba
$apikey = "4Vj8eK4rloUd272L48hsrarnUA";
$mearchantid = "508029";
$reference="TestPayU".time();
$reference = strval($reference);

$signature = $apikey."~".$mearchantid."~".$reference."~".$valor."~"."COP";

$signature = md5($signature);
$signature = strval($signature);

                     ?>
              </tbody>
       </table></div>

       <div class="cont_principal">
        
       <form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
  <input name="merchantId"      type="hidden"  value="508029"   >
  <input name="accountId"       type="hidden"  value="512321" >
  <input name="description"     type="hidden"  value="Test venta con PAYU"  >
  <input name="referenceCode"   type="hidden"  value="<?php echo htmlspecialchars($reference); ?>" >
  <input name="amount"          type="hidden"  value="<?php echo htmlspecialchars($valor); ?>"   >
  <input name="tax"             type="hidden"  value="0"  >
  <input name="taxReturnBase"   type="hidden"  value="0" >
  <input name="currency"        type="hidden"  value="COP" >
  <input name="signature"         value="<?php echo htmlspecialchars($signature); ?>"  >
  <input name="test"            type="hidden"  value="0" >
  <input name="buyerEmail"      type="hidden"  value="<?php echo htmlspecialchars($correo); ?>" >
  <input name="responseUrl"     type="hidden"  value="http://www.test.com/response" >
  <input name="confirmationUrl" type="hidden"  value="http://www.test.com/confirmation" >
  <input name="Submit"class="btn_sign" type="submit"  value="Comprar" >
</form>
       
      </div>

      <!--- Enlace único funcional
      <a href="https://biz.payulatam.com/B0eda825FB3F0AB"><img src="https://ecommerce.payulatam.com/img-secure-2015/boton_pagar_grande.png"></a> -->

    </div>

    </body2>     
</html>  

