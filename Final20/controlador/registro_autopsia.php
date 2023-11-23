<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["mdc_encargado"]) and !empty($_POST["dni_fallecido"]) and !empty($_POST["diagnostico"]) and !empty($_POST["id_morge"])) {
        $mdc_encargado=$_POST["mdc_encargado"];
        $dni_fallecido=$_POST["dni_fallecido"];
        $diagnostico = $_POST["diagnostico"];
        $id_morge = $_POST["id_morge"];

        $sql=$conexion->query(" INSERT INTO autopsia(mdc_encargado, dni_fallecido, diagnostico, id_morge)VALUES('$mdc_encargado','$dni_fallecido','$diagnostico','$id_morge') ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Autopsia registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR AUTOPSIA</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>