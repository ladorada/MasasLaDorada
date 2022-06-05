<?php

class conexionBD{
    public static function cBD(){

        try{
            $bd = new PDO("mysql:host=localhost;dbname=Formularios","root","L27!vg2_A9nGc2vj");
            return $bd;
        }catch(PDOException$e){

            $error_mesage = $e-> getMessage();
            echo $error_mesage;
            exit();
        }

    }
}
/*
host: localhost
nombre bd: Formularios
usuario: root
contraseña: L27!vg2_A9nGc2vj
*/
?>