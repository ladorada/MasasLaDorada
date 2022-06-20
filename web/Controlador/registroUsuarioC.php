<?php

session_start();

class registroUsuarioC
{
    public function registroUsuarios()
    {
        if (isset($_POST["email_i"])) {

            $pass_i = hash('ripemd160',$_POST["pass_i"]);
            $conf_pass_us = hash('ripemd160',$_POST["conf_pass_us"]);

            $datosC = array("email_i" => $_POST["email_i"], "name_us" => $_POST["name_us"], "address_us" => $_POST["address_us"], "pass_i" => $pass_i, "conf_pass_us" => $conf_pass_us);

            $tablaBD = "usuarios";
            $respuesta = RegistroUsuarioM::RegistroUsuariosM($datosC, $tablaBD);

            if($respuesta == "Bien"){
                header("Location:Nosotros.php");
            }else {
                echo "Error al ingresar";
            }

        }
    }

    // actualizar la cantidad de producto
    public function actualizarUsuarioC()
    {

        if (isset($_POST['stock'])) {

            $datosFormulario = array("stock" => $_POST['stock'], "precio" => $_POST['precio'], "acronimo" => $_POST['acronimo']);
            $email = $_SESSION['email_i'];
            $deudaNueva = $datosFormulario["stock"] * $datosFormulario["precio"];
            $nombre = $datosFormulario["acronimo"];

            if ($nombre == 'cant_pascuInt') {
                $datosC = array("deuda" => $deudaNueva, "email_i" => $email, "cant_pascuInt" => $datosFormulario["stock"], "acronimo" => $datosFormulario["acronimo"]);
                $tablaBD = "usuarios";
                $respuesta = RegistroUsuarioM::actualizarUsuarioM($datosC, $tablaBD);
                if ($respuesta == "Bien") {
                    header("Location:Productos.php");
                } else {
                    echo "Error al ingresar";
                }
            }

            if ($nombre == 'cant_pascucrioll') {
                $datosC = array("deuda" => $deudaNueva, "email_i" => $email, "cant_pascucrioll" => $datosFormulario["stock"], "acronimo" => $datosFormulario["acronimo"]);
                $tablaBD = "usuarios";
                $respuesta = RegistroUsuarioM::actualizarUsuarioM($datosC, $tablaBD);
                if ($respuesta == "Bien") {
                    header("Location:Productos.php");
                } else {
                    echo "Error al ingresar";
                }
            }

            if ($nombre == 'cant_masahojal') {
                $datosC = array("deuda" => $deudaNueva, "email_i" => $email, "cant_masahojal" => $datosFormulario["stock"], "acronimo" => $datosFormulario["acronimo"]);
                $tablaBD = "usuarios";
                $respuesta = RegistroUsuarioM::actualizarUsuarioM($datosC, $tablaBD);
                if ($respuesta == "Bien") {
                    header("Location:Productos.php");
                } else {
                    echo "Error al ingresar";
                }
            }

            if ($nombre == 'cant_masacrio') {
                $datosC = array("deuda" => $deudaNueva, "email_i" => $email, "cant_masacrio" => $datosFormulario["stock"], "acronimo" => $datosFormulario["acronimo"]);
                $tablaBD = "usuarios";
                $respuesta = RegistroUsuarioM::actualizarUsuarioM($datosC, $tablaBD);
                if ($respuesta == "Bien") {
                    header("Location:Productos.php");
                } else {
                    echo "Error al ingresar";
                }
            }

            if ($nombre == 'cant_masacopeti') {
                $datosC = array("deuda" => $deudaNueva, "email_i" => $email, "cant_masacopeti" => $datosFormulario["stock"], "acronimo" => $datosFormulario["acronimo"]);
                $tablaBD = "usuarios";
                $respuesta = RegistroUsuarioM::actualizarUsuarioM($datosC, $tablaBD);
                if ($respuesta == "Bien") {
                    header("Location:Productos.php");
                } else {
                    echo "Error al ingresar";
                }
            }

            if ($nombre == 'cant_copehojal') {
                $datosC = array("deuda" => $deudaNueva, "email_i" => $email, "cant_copehojal" => $datosFormulario["stock"], "acronimo" => $datosFormulario["acronimo"]);
                $tablaBD = "usuarios";
                $respuesta = RegistroUsuarioM::actualizarUsuarioM($datosC, $tablaBD);
                if ($respuesta == "Bien") {
                    header("Location:Productos.php");
                } else {
                    echo "Error al ingresar";
                }
            }

        }
    }


    // Mostrar los resulatods
    public function mostrarCarritoC()
    {

        $email = $_SESSION['email_i'];
        $datosC = array("email_i" => $email);
        $tablaBD = "usuarios";

        $respuesta = RegistroUsuarioM::mostrarCarritoM($datosC, $tablaBD);

        foreach ($respuesta as $key => $value) {
            echo '<tr>
            <td>' . $value["cant_pascuInt"] . '</td>
            <td>' . $value["cant_pascucrioll"] . '</td>
            <td>' . $value["cant_masahojal"] . '</td>
            <td>' . $value["cant_masacrio"] . '</td>
            <td>' . $value["cant_masacopeti"] . '</td>
            <td>' . $value["cant_copehojal"] . '</td>
            <td>' . $value["deuda"] . '</td>
            </tr>';
        }
    }

    public function mostrarDeudaC()
    {

        $email = $_SESSION['email_i'];
        $datosC = array("email_i" => $email);
        $tablaBD = "usuarios";

        $respuesta = RegistroUsuarioM::mostrarDeudaM($datosC, $tablaBD);

        return $respuesta[0];
        
    }

}
