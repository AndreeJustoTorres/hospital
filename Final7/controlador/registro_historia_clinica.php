<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["adress"]) and !empty($_POST["id_paciente"])) {
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $adress = $_POST["adress"];
        $id_paciente = $_POST["id_paciente"];

        $sql=$conexion->query(" INSERT INTO historia_clinica(nombre, apellido, adress, id_paciente)VALUES('$nombre','$apellido','$adress','$id_paciente') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Historia Clínica registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR LA HISTORIA CLÍNICA</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>