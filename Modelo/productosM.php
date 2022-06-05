<?php
require_once "conexionBD.php";

class productosM extends conexionBD
{
    // Registrar los productos
    static public function IngresoProductosM($datosC, $tablaBD)
    {

        $pdo = conexionBD::cBD()->prepare("INSERT INTO $tablaBD (nombre, correo, telefono, direccion, mensaje)
        VALUES (:nombre, :correo, :telefono, :direccion, :mensaje)");

        $pdo->bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo->bindParam(":correo", $datosC["correo"], PDO::PARAM_STR);
        $pdo->bindParam(":telefono", $datosC["telefono"], PDO::PARAM_INT);
        $pdo->bindParam(":direccion", $datosC["direccion"], PDO::PARAM_STR);
        $pdo->bindParam(":mensaje", $datosC["mensaje"], PDO::PARAM_STR);

        if ($pdo->execute()) {

            return "Bien";
        } else {
            return "Error";
        }

        $pdo->close;
    }
    // Mostrar los resulatods
    static public function mostrarProductosM($tablaBD)
    {

        $pdo = conexionBD::cBD()->prepare("SELECT * FROM $tablaBD");

        $pdo->execute();
        return $pdo->fetchAll();
        $pdo->close;
    }

    // editar productos
    static public function editarProductosM($datosC, $tablaBD)
    {

        $pdo = conexionBD::cBD()->prepare("SELECT id, nombre, precio, stock, acronimo FROM $tablaBD WHERE id = :id");


        $pdo->bindParam(":id", $datosC, PDO::PARAM_INT);
        $pdo->execute();
        return $pdo->fetch();
        $pdo->close;
    }

    static public function actualizarStockM($datosC, $tablaBD) {

        $pdo = conexionBD::cBD()->prepare("UPDATE $tablaBD SET stock= stock-:stock WHERE id = :id");

        $pdo->bindParam(":id", $datosC["id"], PDO::PARAM_INT);
        $pdo->bindParam(":stock", $datosC["stock"], PDO::PARAM_INT);
        
        if ($pdo->execute()) {

            return "Bien";
        } else {
            return "Error";
        }

        $pdo->close;
    }


    static public function eliminarStockM($datosC, $tablaBD){

    $pdo = conexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");

    $pdo->bindParam(":id", $datosC["id"], PDO::PARAM_INT);
    
    if ($pdo->execute()) {

        return "Bien";
    } else {
        return "Error";
    }

    $pdo->close;
}

}
