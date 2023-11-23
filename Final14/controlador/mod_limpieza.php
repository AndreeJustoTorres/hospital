<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["id_hospital"])) {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $id_hospital = $_POST["id_hospital"];

        $sql=$conexion->query(" UPDATE limpieza SET nombre='$nombre', apellido='$apellido', id_hospital='$id_hospital' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_limpieza.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>