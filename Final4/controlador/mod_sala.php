<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["num_camas"]) and !empty($_POST["id_hospital"])) {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $num_camas=$_POST["num_camas"];
        $id_hospital = $_POST["id_hospital"];

        $sql=$conexion->query(" UPDATE sala SET nombre=$nombre, num_camas='$num_camas', id_hospital='$id_hospital' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_sala.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>