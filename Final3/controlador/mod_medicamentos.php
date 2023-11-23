<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["cantidad"]) and !empty($_POST["receta"]) and !empty($_POST["id_farmacia"])) {
        $id=$_POST["id"];
        $cantidad=$_POST["cantidad"];
        $receta=$_POST["receta"];
        $id_farmacia = $_POST["id_farmacia"];

        $sql=$conexion->query(" UPDATE medicamentos SET cantidad=$cantidad, receta='$receta', id_farmacia='$id_farmacia' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_medicamentos.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>