<?php
require_once "conexionBD.php";

class distribuidoresM extends conexionBD{

    //Registrar los distribuidores
    static public function IngresoDistribuidoresM($datosC, $tablaBD){

        $pdo = conexionBD::cBD()->prepare("INSERT INTO $tablaBD (nombre, correo, telefono, direccion, mensaje) 
        VALUES (:nombre, :correo, :telefono, :direccion, :mensaje)");

        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":correo", $datosC["correo"], PDO::PARAM_STR);
        $pdo -> bindParam(":telefono", $datosC["telefono"], PDO::PARAM_INT);
        $pdo -> bindParam(":direccion", $datosC["direccion"], PDO::PARAM_STR);
        $pdo -> bindParam(":mensaje", $datosC["mensaje"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return "Bien";
        }else{
            return "Error";
        }

        $pdo->close;


    }
}