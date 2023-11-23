<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["phone"]) and !empty($_POST["id_medico"])) {
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $phone = $_POST["phone"];
        $id_medico = $_POST["id_medico"];

        $sql=$conexion->query(" INSERT INTO paciente(nombre, apellido, phone, id_medico)VALUES('$nombre','$apellido',$phone,'$id_medico') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Paciente registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR PACIENTE</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>