<?php
require_once "conexionBD.php";

class usuarioM extends conexionBD{
    static public function IngresoM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT email_i, pass_i FROM $tablaBD WHERE email_i = :email_i");

        $pdo -> bindParam(":email_i", $datosC["email_i"], PDO::PARAM_STR);

        $pdo -> execute();

        return $pdo->fetch();

        $pdo->close;


    }

    static public function RecuperarContraseñaM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT email_i FROM $tablaBD WHERE email_i = :email_i");

        $pdo -> bindParam(":email_i", $datosC["email_i"], PDO::PARAM_STR);

        $pdo -> execute();

        return $pdo->fetch();

        $pdo->close;


    }

}

