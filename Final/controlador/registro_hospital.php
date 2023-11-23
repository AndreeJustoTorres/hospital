<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["adress"])) {
        $nombre=$_POST["nombre"];
        $adress=$_POST["adress"];

        $sql=$conexion->query(" INSERT INTO hospital(nombre,adress)VALUES('$nombre','$adress') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Hospital registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos no está completo</div>';
    }
}

?>