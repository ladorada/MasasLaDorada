<?php

class productosC
{
    public function productosC()
    {
        if (isset($_POST["email_i"])) {

            $datosC = array("email_i" => $_POST["email_i"], "pass_i" => $_POST["pass_i"]);

            $tablaBD = "usuarios";
            $respuesta = usuarioM::IngresoM($datosC, $tablaBD);

            if ($respuesta["email_i"] == $_POST["email_i"] && $respuesta["pass_i"] == $_POST["pass_i"]) {

                session_start();
                $_SESSION["Ingreso"] = true;
                header("Location:Carrito.php");
            } else {
                echo "Error al ingresar";
            }
        }
    }


    // Mostrar los resulatods
    public function mostrarProductosC()
    {

        $tablaBD = "productos";

        $respuesta = productosM::mostrarProductosM($tablaBD);

        foreach ($respuesta as $key => $value) {
            echo '<tr>
            <td>' . $value["nombre"] . '</td>
            <td><img src="../Vistas/Images/' . $value["nombre"] . '.png" alt="descripción" width="100" height="100" /></td>
            <td>' . $value["precio"] . '</td>
            <td>' . $value["stock"] . '</td>
            <td><a href="Comprar.php?id=' . $value["id"] . '"><button>Comprar</button></a></td>
            </tr>';
        }
    }
    // Editar la cantidad de producto
    public function editarProductosC()
    {
        $datosC = ($_GET["id"]);
        $tablaBD = "productos";

        $respuesta = productosM::editarProductosM($datosC, $tablaBD);

        echo '<input type="hidden" class="input_form_sign d_block active_inp" value="'.$respuesta["id"].'" name="id"/>
              <input type="hidden" class="input_form_sign d_block active_inp" value="'.$respuesta["acronimo"].'" name="acronimo"/>
              <input type="text" class="input_form_sign d_block active_inp" value="'.$respuesta["nombre"].'" name="nombre"/>
              <label for="precio">Precio por unidad:</label>  
              <input type="number" class="input_form_sign d_block active_inp" value="'.$respuesta["precio"].'" name="precio" />  
              <label for="stock">Cantidad máxima disponible:</label>  
              <input type="number" class="input_form_sign d_block active_inp" value="'.$respuesta["stock"].'" />  
              <label for="stock">Cantidad que vas a comprar:</label>  
              <input type="number" class="input_form_sign d_block active_inp" name="stock"/>  
              <input type="submit" class="btn_sign" value="Comprar"/>';

    }

        // actualizar la cantidad de producto

        
        public function actualizarStockC()
        {

            if (isset($_POST['stock'])){

                $datosC = array("id"=>$_POST['id'], "stock"=>$_POST['stock']);
                $tablaBD = "productos";
                $respuesta = productosM::actualizarStockM($datosC, $tablaBD);

                if($respuesta == "Bien"){
                    header("Location:Productos.php");
                }else {
                    echo "Error al ingresar";
                }


            }
    
        }

        // eliminar producto
        public function eliminarStockC()
        {
            if(isset($_GET["id"])){
                $datosC = $_GET["id"];
                $tablaBD = "productos";
                $respuesta = productosM::eliminarStockM($datosC, $tablaBD);
                if($respuesta == "Bien"){
                    header("Location:Productos.php");
                }else {
                    echo "Error al ingresar";
                }
            }


        }



}
