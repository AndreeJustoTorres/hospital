<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["cantidad"]) and !empty($_POST["receta"]) and !empty($_POST["id_farmacia"])) {
        $cantidad=$_POST["cantidad"];
        $receta=$_POST["receta"];
        $id_farmacia = $_POST["id_farmacia"];

        $sql=$conexion->query(" INSERT INTO medicamentos(cantidad, receta, id_farmacia)VALUES($cantidad,'$receta','$id_farmacia') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Medicamento registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR MEDICAMENTO</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>