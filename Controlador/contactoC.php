<?php

class contactoC
{
    public function registroContacto()
    {
        if (isset($_POST["nombre"])) {

            $datosC = array("nombre" => $_POST["nombre"], "correo" => $_POST["correo"], "telefono" => $_POST["telefono"], "direccion" => $_POST["direccion"], "mensaje" => $_POST["mensaje"]);

            $tablaBD = "contacto";
            $respuesta = contactoM::RegistroContactoM($datosC, $tablaBD);

            if($respuesta == "Bien"){
                header("Location:Nosotros.php");
            }else {
                echo "Error al ingresar";
            }

        }
    }
}
