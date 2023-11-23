<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["phone"]) and !empty($_POST["fecha"]) and !empty($_POST["hora"]) and !empty($_POST["id_administrativo"])) {
        $id=$_POST["id"];
        $phone=$_POST["phone"];
        $fecha=$_POST["fecha"];
        $hora=$_POST["hora"];
        $id_administrativo = $_POST["id_administrativo"];

        $sql=$conexion->query(" UPDATE cita SET phone=$phone, fecha='$fecha', hora='$hora', id_administrativo='$id_administrativo' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_cita.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>