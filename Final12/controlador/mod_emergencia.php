<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["encargado"]) and !empty($_POST["turno"]) and !empty($_POST["recepcionista"]) and !empty($_POST["id_hospital"])) {
        $id=$_POST["id"];
        $encargado=$_POST["encargado"];
        $turno=$_POST["turno"];
        $recepcionista=$_POST["recepcionista"];
        $id_hospital=$_POST["id_hospital"];

        $sql=$conexion->query(" UPDATE emergencia SET encargado='$encargado', turno='$turno', recepcionista='$recepcionista', id_hospital='$id_hospital' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_emergencia.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>