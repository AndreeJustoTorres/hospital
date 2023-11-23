<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["capacidad"]) and !empty($_POST["fallecido"]) and !empty($_POST["id_hospital"])) {
        $id=$_POST["id"];
        $capacidad=$_POST["capacidad"];
        $fallecido=$_POST["fallecido"];
        $id_hospital = $_POST["id_hospital"];

        $sql=$conexion->query(" UPDATE morge SET capacidad=$capacidad, fallecido='$fallecido', id_hospital='$id_hospital' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_morge.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>