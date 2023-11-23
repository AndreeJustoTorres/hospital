<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["adress"])) {
        $id=$_GET["id"];
        $nombre=$_POST["nombre"];
        $adress=$_POST["adress"];
        $sql=$conexion->query(" UPDATE hospital SET nombre='$nombre',adress='$adress' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_hospital.php");
        }else {
            echo "<div class='alert alert-danger'>ERROR AL MODIFICAR</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Alguno de los campos está vacío</div>";
    }
}

?>