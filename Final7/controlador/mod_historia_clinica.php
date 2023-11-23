<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["adress"]) and !empty($_POST["id_paciente"])) {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $adress = $_POST["adress"];
        $id_paciente = $_POST["id_paciente"];

        $sql=$conexion->query(" UPDATE historia_clinica SET nombre='$nombre', apellido='$apellido', adress='$adress', id_paciente='$id_paciente' WHERE id=$id ");
        if ($sql==1) {
            header("location:index_historia_clinica.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL MODIFICAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
?>