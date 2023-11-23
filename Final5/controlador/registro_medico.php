<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["cedula"]) and !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["id_hospital"])) {
        $cedula=$_POST["cedula"];
        $nombre=$_POST["nombre"];
        $apellido = $_POST["apellido"];
        $id_hospital = $_POST["id_hospital"];

        $sql=$conexion->query(" INSERT INTO medico(cedula, nombre, apellido, id_hospital)VALUES($cedula,'$nombre','$apellido','$id_hospital') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Médico registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR MÉDICO</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>