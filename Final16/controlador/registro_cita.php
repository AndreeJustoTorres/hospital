<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["phone"]) and !empty($_POST["fecha"]) and !empty($_POST["hora"]) and !empty($_POST["id_administrativo"])) {
        $phone=$_POST["phone"];
        $fecha=$_POST["fecha"];
        $hora=$_POST["hora"];
        $id_administrativo = $_POST["id_administrativo"];

        $sql=$conexion->query(" INSERT INTO cita(phone, fecha, hora, id_administrativo)VALUES($phone,'$fecha','$hora','$id_administrativo') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Cita registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR CITA</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>