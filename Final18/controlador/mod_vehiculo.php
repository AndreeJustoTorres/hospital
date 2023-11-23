<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["uso"]) and !empty($_POST["modelo"]) and !empty($_POST["placa"]) and !empty($_POST["id_seguridad"])) {
        $id=$_POST["id"];
        $uso=$_POST["uso"];
        $modelo=$_POST["modelo"];
        $placa = $_POST["placa"];
        $id_seguridad = $_POST["id_seguridad"];

        $sql=$conexion->query(" UPDATE vehiculo SET uso='$uso', modelo='$modelo', placa='$placa', id_seguridad='$id_seguridad' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_vehiculo.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>