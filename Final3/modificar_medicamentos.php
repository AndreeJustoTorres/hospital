<?php
include "modelo/conexion.php";
$id=$_GET["id"];
$sql=$conexion->query(" SELECT * FROM medicamentos WHERE id=$id ");

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
        <h3 class="text-center text-secondary">Modificar medicamentos</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "controlador/mod_medicamentos.php";
        while ($datos=$sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                <input type="text" class="form-control" name="cantidad" value="<?= $datos->cantidad ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Receta</label>
                <input type="text" class="form-control" name="receta" value="<?= $datos->receta ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Farmacia</label>
                <input type="text" class="form-control" name="id_farmacia" value="<?= $datos->id_farmacia ?>">
            </div>
        <?php }
        ?>
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button></button>
    </form>
</body>
</html>