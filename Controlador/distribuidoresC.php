<?php

class distribuidoresC
{
    public function IngresoDistribuidoresC()
    {
        if (isset($_POST["nombre"])) {

            $datosC = array("nombre" => $_POST["nombre"], "correo" => $_POST["correo"], "telefono" => $_POST["telefono"], "direccion" => $_POST["direccion"], "mensaje" => $_POST["mensaje"]);

            $tablaBD = "distribuidores";
            $respuesta = distribuidoresM::IngresoDistribuidoresM($datosC, $tablaBD);

            if($respuesta == "Bien"){
                header("Location:Nosotros.php");
            }else {
                echo "Error al ingresar";
            }

        }
    }
}
