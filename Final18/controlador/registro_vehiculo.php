<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["uso"]) and !empty($_POST["modelo"]) and !empty($_POST["placa"]) and !empty($_POST["id_seguridad"])) {
        $uso=$_POST["uso"];
        $modelo=$_POST["modelo"];
        $placa=$_POST["placa"];
        $id_seguridad=$_POST["id_seguridad"];

        $sql=$conexion->query(" INSERT INTO vehiculo(uso, modelo, placa, id_seguridad)VALUES('$uso','$modelo','$placa','$id_seguridad') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Vehiculo registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR VEHICULO</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>