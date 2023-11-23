<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["adress"]) and !empty($_POST["nombre"]) and !empty($_POST["phone"]) and !empty($_POST["id_hospital"])) {
        $adress=$_POST["adress"];
        $nombre=$_POST["nombre"];
        $phone = $_POST["phone"];
        $id_hospital = $_POST["id_hospital"];

        $sql=$conexion->query(" INSERT INTO laboratorio(adress, nombre, phone, id_hospital)VALUES('$adress','$nombre',$phone,'$id_hospital') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Laboratorio registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR LABORATORIO</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>