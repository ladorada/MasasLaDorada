<?php

class usuarioC
{
    public function IngresoC()
    {
        if (isset($_POST["email_i"])) {

            $pass_i = hash('ripemd160',$_POST["pass_i"]);
            $datosC = array("email_i" => $_POST["email_i"], "pass_i" => $_POST["pass_i"]);

            $tablaBD = "usuarios";
            $respuesta = usuarioM::IngresoM($datosC, $tablaBD);

            if ($respuesta["email_i"] == $_POST["email_i"] && $respuesta["pass_i"] == $pass_i) {

                session_start();
                $_SESSION['email_i']= $datosC["email_i"];
                $_SESSION["Ingreso"] = true;
                header("Location:Carrito.php");
                
            } else {
                echo "Error al ingresar";
            }
        }
    }
}
