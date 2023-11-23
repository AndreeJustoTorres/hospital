<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["capacidad"]) and !empty($_POST["fallecido"]) and !empty($_POST["id_hospital"])) {
        $capacidad=$_POST["capacidad"];
        $fallecido=$_POST["fallecido"];
        $id_hospital = $_POST["id_hospital"];

        $sql=$conexion->query(" INSERT INTO morge(capacidad, fallecido, id_hospital)VALUES($capacidad,'$fallecido','$id_hospital') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Morge registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR MORGE</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>