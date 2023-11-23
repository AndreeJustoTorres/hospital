<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["personal"]) and !empty($_POST["equipo_mdc"]) and !empty($_POST["id_hospital"])) {
        $id=$_POST["id"];
        $personal=$_POST["personal"];
        $equipo_mdc=$_POST["equipo_mdc"];
        $id_hospital = $_POST["id_hospital"];

        $sql=$conexion->query(" UPDATE uci SET personal=$personal, equipo_mdc='$equipo_mdc', id_hospital='$id_hospital' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_hospital.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>