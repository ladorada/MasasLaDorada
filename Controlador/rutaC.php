<?php

class RutasControlador{

    public function Plantilla(){
        include "Vistas/Plantilla.php";
    }

    public function Rutas(){
        if (isset($_GET["ruta"])){
            $rutas = $_GET["ruta"];
        }else{
        $rutas = "index";
    }

    $respuesta = Modelo::RutasModelo($rutas);
    include $respuesta;
}
}
?>