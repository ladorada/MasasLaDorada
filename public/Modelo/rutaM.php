<?php 

class Modelo{
    static public function RutasModelo($rutas){

        if($rutas=="ingreso" || $rutas=="registrar" ){
$pagina = "Vistas/Modulos/".$rutas.".php";

        }else if($rutas=="index"){

            $pagina = "Vistas/Index.php";
        }else{

            $pagina = "Vistas/Index.php";
        }

        return $pagina;
    }
}
?>