<?php

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query(" DELETE FROM diagnostico WHERE id=$id");
    if ($sql==1) {
        echo '<div class="alert alert-success">Eliminado Correctamente</div>';
    } else {
        echo '<div class="alert alert-warning">Error al eliminar</div>';
    }
}

?>