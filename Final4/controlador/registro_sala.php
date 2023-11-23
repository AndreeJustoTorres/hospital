<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["num_camas"]) and !empty($_POST["id_hospital"])) {
        $nombre=$_POST["nombre"];
        $num_camas=$_POST["num_camas"];
        $id_hospital = $_POST["id_hospital"];

        $sql=$conexion->query(" INSERT INTO sala(nombre, num_camas, id_hospital)VALUES('$nombre',$num_camas,'$id_hospital') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Sala registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR LA SALA</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>