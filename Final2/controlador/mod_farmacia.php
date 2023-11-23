<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["phone"]) and !empty($_POST["name"]) and !empty($_POST["adress"]) and !empty($_POST["id_hospital"])) {
        $id=$_POST["id"];
        $phone=$_POST["phone"];
        $nombre=$_POST["name"];
        $adress=$_POST["adress"];
        $id_hospital = $_POST["id_hospital"];

        $sql=$conexion->query(" UPDATE farmacia SET phone=$phone, nombre='$nombre', adress='$adress', id_hospital='$id_hospital' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_farmacia.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>