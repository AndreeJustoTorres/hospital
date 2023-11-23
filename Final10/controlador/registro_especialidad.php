<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["id_medico"])) {
        $nombre=$_POST["nombre"];
        $id_medico = $_POST["id_medico"];

        $sql=$conexion->query(" INSERT INTO especialidad(nombre, id_medico)VALUES('$nombre','$id_medico') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Especialidad registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR ESPECIALIDAD</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>