<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["tipo"]) and !empty($_POST["id_medico"])) {
        $id=$_POST["id"];
        $tipo=$_POST["tipo"];
        $id_medico= $_POST["id_medico"];

        $sql=$conexion->query(" UPDATE diagnostico SET tipo='$tipo', id_medico='$id_medico' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_diagnostico.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>