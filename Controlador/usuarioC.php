<?php

require "../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "/Users/estebanmarentes/.bitnami/stackman/machines/xampp/volumes/root/htdocs/LaDorada/vendor/phpmailer/phpmailer/src/PHPMailer.php";
require '/Users/estebanmarentes/.bitnami/stackman/machines/xampp/volumes/root/htdocs/LaDorada/vendor/phpmailer/phpmailer/src/Exception.php';
require '/Users/estebanmarentes/.bitnami/stackman/machines/xampp/volumes/root/htdocs/LaDorada/vendor/phpmailer/phpmailer/src/SMTP.php';

?>

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
    /*public function correoC()
    {
        if (isset($_POST["email_i"])) {

            $datosC = array("email_i" => $_POST["email_i"]);
            $tablaBD = "usuarios";
            $respuesta = usuarioM::RecuperarContraseñaM($datosC, $tablaBD);

            $email = $respuesta["email_i"];

            if ($respuesta["email_i"] == $_POST["email_i"]) {
                $link="<a href='recuperarContrasena.php?key=".$email."'>Clic para recuperar tu contraseña</a>";
                $mail = new PHPMailer();
                $mail->CharSet =  "utf-8";
                $mail->IsSMTP();
                // enable SMTP authentication
                $mail->SMTPAuth = true;                  
                // GMAIL username
                $mail->Username = "masasladorada@gmail.com";
                // GMAIL password
                $mail->Password = "8QS\:iFB^M";
                $mail->SMTPSecure = "ssl";  
                // sets GMAIL as the SMTP server
                $mail->Host = "smtp.gmail.com";
                // set the SMTP port for the GMAIL server
                $mail->Port = "465";
                $mail->From='masasladorada@gmail.com';
                $mail->FromName='La Dorada';
                $mail->AddAddress('reciever_email_id', 'reciever_name');
                $mail->Subject  =  'Reset Password';
                $mail->IsHTML(true);
                $mail->Body    = 'Click On This Link to Reset Password ';
                if($mail->Send())
                {
                  echo "Check Your Email and Click on the link sent to your email";
                }
                else
                {
                  echo "Mail Error - >".$mail->ErrorInfo;
                }


        }
    }
}*/



}
