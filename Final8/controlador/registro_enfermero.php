<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["phone"]) and !empty($_POST["id_medico"])) {
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $phone = $_POST["phone"];
        $id_medico = $_POST["id_medico"];

        $sql=$conexion->query(" INSERT INTO enfermero(nombre, apellido, phone, id_medico)VALUES('$nombre','$apellido',$phone,'$id_medico') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Enfermero registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR ENFERMERO</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>