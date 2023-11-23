<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["mdc_encargado"]) and !empty($_POST["dni_fallecido"]) and !empty($_POST["diagnostico"]) and !empty($_POST["id_morge"])) {
        $id=$_POST["id"];
        $mdc_encargado=$_POST["mdc_encargado"];
        $dni_fallecido=$_POST["dni_fallecido"];
        $diagnostico = $_POST["diagnostico"];
        $id_morge = $_POST["id_morge"];

        $sql=$conexion->query(" UPDATE autopsia SET mdc_encargado='$mdc_encargado', dni_fallecido='$dni_fallecido', diagnostico='$diagnostico', id_morge='$id_morge' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_autopsia.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>