<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["phone"]) and !empty($_POST["name"]) and !empty($_POST["adress"]) and !empty($_POST["id_hospital"])) {
        $phone=$_POST["phone"];
        $nombre=$_POST["name"];
        $adress=$_POST["adress"];
        $id_hospital = $_POST["id_hospital"];

        $sql=$conexion->query(" INSERT INTO farmacia(phone, nombre, adress, id_hospital)VALUES($phone,'$nombre','$adress','$id_hospital') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Farmacia registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR FARMACIA</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>