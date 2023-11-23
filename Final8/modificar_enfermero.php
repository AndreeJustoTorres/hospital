<?php
include "modelo/conexion.php";
$id=$_GET["id"];
$sql=$conexion->query(" SELECT * FROM enfermero WHERE id=$id ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">Modificar enfermero</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "controlador/mod_enfermero.php";
        while ($datos=$sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="phone" value="<?= $datos->phone ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Médico</label>
                <input type="text" class="form-control" name="id_medico" value="<?= $datos->id_medico ?>">
            </div>
        <?php }
        ?>
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button></button>
    </form>
</body>
</html>