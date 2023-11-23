<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["id_medico"])) {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $id_medico = $_POST["id_medico"];

        $sql=$conexion->query(" UPDATE especialidad SET nombre='$nombre', id_medico='$id_medico' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_especialidad.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>