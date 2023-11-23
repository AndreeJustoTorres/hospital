<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["tipo"]) and !empty($_POST["id_medico"])) {
        $tipo=$_POST["tipo"];
        $id_medico = $_POST["id_medico"];

        $sql=$conexion->query(" INSERT INTO diagnostico(tipo, id_medico)VALUES('$tipo','$id_medico') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Diagnostico registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR DIAGNOSTICO</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>