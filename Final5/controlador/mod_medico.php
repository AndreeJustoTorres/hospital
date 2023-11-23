<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["cedula"]) and !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["id_hospital"])) {
        $id=$_POST["id"];
        $cedula=$_POST["cedula"];
        $nombre=$_POST["nombre"];
        $apellido = $_POST["apellido"];
        $id_hospital = $_POST["id_hospital"];

        $sql=$conexion->query(" UPDATE medico SET cedula=$cedula, nombre='$nombre', apellido='$apellido', id_hospital='$id_hospital' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_medico.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>