<?php
require_once "conexionBD.php";

class RegistroUsuarioM extends conexionBD{
    static public function RegistroUsuariosM($datosC, $tablaBD){

        $pdo = conexionBD::cBD()->prepare("INSERT INTO $tablaBD (email_i, name_us, address_us, pass_i, conf_pass_us, deuda, cant_pascuInt, cant_pascucrioll, cant_masahojal, cant_masacrio, cant_masacopeti, cant_copehojal)
        VALUES (:email_i, :name_us, :address_us, :pass_i, :conf_pass_us, 0.0, 0,0,0,0,0,0)");

        $pdo -> bindParam(":email_i", $datosC["email_i"], PDO::PARAM_STR);
        $pdo -> bindParam(":name_us", $datosC["name_us"], PDO::PARAM_STR);
        $pdo -> bindParam(":address_us", $datosC["address_us"], PDO::PARAM_STR);
        $pdo -> bindParam(":pass_i", $datosC["pass_i"], PDO::PARAM_STR);
        $pdo -> bindParam(":conf_pass_us", $datosC["conf_pass_us"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return "Bien";
        }else{
            return "Error";
        }

        $pdo->close;


    }

    static public function actualizarUsuarioM($datosC, $tablaBD) {
        $nombre = $datosC['acronimo'];


         if ($nombre == 'cant_pascuInt') {
            $pdo = conexionBD::cBD()->prepare("UPDATE $tablaBD SET deuda = deuda+:deuda, cant_pascuInt = cant_pascuInt+:cant_pascuInt WHERE email_i = :email_i" );

            $pdo->bindParam(":deuda", $datosC["deuda"], PDO::PARAM_INT);
            $pdo->bindParam(":email_i", $datosC["email_i"], PDO::PARAM_STR);
            $pdo->bindParam(":cant_pascuInt", $datosC["cant_pascuInt"], PDO::PARAM_INT);
    
            if ($pdo->execute()) {    
                return "Bien";
            } else {
                return "Error";
            }
            $pdo->close;

        } elseif ($datosC["acronimo"] == 'cant_pascucrioll') {
            $pdo = conexionBD::cBD()->prepare("UPDATE $tablaBD SET deuda = deuda+:deuda, cant_pascucrioll = cant_pascucrioll+:cant_pascucrioll WHERE email_i = :email_i" );

            $pdo->bindParam(":deuda", $datosC["deuda"], PDO::PARAM_INT);
            $pdo->bindParam(":email_i", $datosC["email_i"], PDO::PARAM_STR);
            $pdo->bindParam(":cant_pascucrioll", $datosC["cant_pascucrioll"], PDO::PARAM_INT);
    
            if ($pdo->execute()) {    
                return "Bien";
            } else {
                return "Error";
            }
            $pdo->close;
        } elseif ($datosC["acronimo"] == 'cant_masahojal') {
            
            $pdo = conexionBD::cBD()->prepare("UPDATE $tablaBD SET deuda = deuda+:deuda, cant_masahojal = cant_masahojal+:cant_masahojal WHERE email_i = :email_i" );

            $pdo->bindParam(":deuda", $datosC["deuda"], PDO::PARAM_INT);
            $pdo->bindParam(":email_i", $datosC["email_i"], PDO::PARAM_STR);
            $pdo->bindParam(":cant_masahojal", $datosC["cant_masahojal"], PDO::PARAM_INT);
    
            if ($pdo->execute()) {    
                return "Bien";
            } else {
                return "Error";
            }
            $pdo->close;

        } elseif ($datosC["acronimo"] == 'cant_masacrio') {
            $pdo = conexionBD::cBD()->prepare("UPDATE $tablaBD SET deuda = deuda+:deuda, cant_masacrio = cant_masacrio+:cant_masacrio WHERE email_i = :email_i" );

            $pdo->bindParam(":deuda", $datosC["deuda"], PDO::PARAM_INT);
            $pdo->bindParam(":email_i", $datosC["email_i"], PDO::PARAM_STR);
            $pdo->bindParam(":cant_masacrio", $datosC["cant_masacrio"], PDO::PARAM_INT);
    
            if ($pdo->execute()) {    
                return "Bien";
            } else {
                return "Error";
            }
            $pdo->close;
        } elseif ($datosC["acronimo"] == 'cant_masacopeti') {
            $pdo = conexionBD::cBD()->prepare("UPDATE $tablaBD SET deuda = deuda+:deuda, cant_masacopeti = cant_masacopeti+:cant_masacopeti WHERE email_i = :email_i" );

            $pdo->bindParam(":deuda", $datosC["deuda"], PDO::PARAM_INT);
            $pdo->bindParam(":email_i", $datosC["email_i"], PDO::PARAM_STR);
            $pdo->bindParam(":cant_masacopeti", $datosC["cant_masacopeti"], PDO::PARAM_INT);
    
            if ($pdo->execute()) {    
                return "Bien";
            } else {
                return "Error";
            }
            $pdo->close;
        } elseif ($datosC["acronimo"] == 'cant_copehojal') {
            $pdo = conexionBD::cBD()->prepare("UPDATE $tablaBD SET deuda = deuda+:deuda, cant_copehojal = cant_copehojal+:cant_copehojal WHERE email_i = :email_i" );

            $pdo->bindParam(":deuda", $datosC["deuda"], PDO::PARAM_INT);
            $pdo->bindParam(":email_i", $datosC["email_i"], PDO::PARAM_STR);
            $pdo->bindParam(":cant_copehojal", $datosC["cant_copehojal"], PDO::PARAM_INT);
    
            if ($pdo->execute()) {    
                return "Bien";
            } else {
                return "Error";
            }
            $pdo->close;
        }


    }

    // Mostrar los resulatods
    static public function mostrarCarritoM($datosC, $tablaBD)
    {
        $pdo = conexionBD::cBD()->prepare("SELECT cant_pascuInt, cant_pascucrioll, cant_masahojal, cant_masacrio, cant_masacopeti, cant_copehojal, deuda FROM $tablaBD WHERE email_i = :email_i ");
        $pdo->bindParam(":email_i", $datosC["email_i"], PDO::PARAM_STR);

        $pdo->execute();
        return $pdo->fetchAll();
        $pdo->close;
    }


}