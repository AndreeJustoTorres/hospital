<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["adress"]) and !empty($_POST["nombre"]) and !empty($_POST["phone"]) and !empty($_POST["id_hospital"])) {
        $id=$_POST["id"];
        $adress=$_POST["adress"];
        $nombre=$_POST["nombre"];
        $phone = $_POST["phone"];
        $id_hospital = $_POST["id_hospital"];

        $sql=$conexion->query(" UPDATE laboratorio SET adress='$adress', nombre='$nombre', phone=$phone, id_hospital='$id_hospital' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_laboratorio.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>