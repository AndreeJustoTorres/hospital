<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["encargado"]) and !empty($_POST["turno"]) and !empty($_POST["recepcionista"]) and !empty($_POST["id_hospital"])) {
        $encargado=$_POST["encargado"];
        $turno=$_POST["turno"];
        $recepcionista = $_POST["recepcionista"];
        $id_hospital = $_POST["id_hospital"];

        $sql=$conexion->query(" INSERT INTO emergencia(encargado, turno, recepcionista, id_hospital)VALUES('$encargado','$turno','$recepcionista','$id_hospital') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Emergencia registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR EMERGENCIA</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>