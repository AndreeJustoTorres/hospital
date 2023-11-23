<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["personal"]) and !empty($_POST["equipo_mdc"]) and !empty($_POST["id_hospital"])) {
        $personal=$_POST["personal"];
        $equipo_mdc=$_POST["equipo_mdc"];
        $id_hospital = $_POST["id_hospital"];

        $sql=$conexion->query(" INSERT INTO uci(personal, equipo_mdc, id_hospital)VALUES($personal,'$equipo_mdc','$id_hospital') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">U.C.I. registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR U.C.I.</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>