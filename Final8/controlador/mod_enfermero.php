<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["phone"]) and !empty($_POST["id_medico"])) {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $phone = $_POST["phone"];
        $id_medico = $_POST["id_medico"];

        $sql=$conexion->query(" UPDATE enfermero SET nombre='$nombre', apellido='$apellido', phone='$phone', id_medico='$id_medico' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_enfermero.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>