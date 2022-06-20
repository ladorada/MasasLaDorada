<?php

class conexionBD{
    public static function cBD(){

        //Get Heroku ClearDB connection information
        $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $cleardb_server = $cleardb_url["host"];
        $cleardb_username = $cleardb_url["user"];
        $cleardb_password = $cleardb_url["pass"];
        $cleardb_db = substr($cleardb_url["path"],1);
        $active_group = 'default';
        $query_builder = TRUE;

        try{
            //$bd = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
            $bd = new PDO("mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_9ca67ac28214a8f","b30d55d7ca9702","31aeeb88");
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