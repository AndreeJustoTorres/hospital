<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query(" DELETE FROM hospital WHERE id=$id ");
    if ($sql==1) {
        echo '<div class="alert alert-success text-center">Dato Eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger text-center">Error al eliminar</div>';
    }
}
?>