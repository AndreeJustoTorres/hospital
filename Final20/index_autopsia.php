<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autopsia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/61ac329b12.js" crossorigin="anonymous"></script>
</head>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("Estás seguro que desea eliminar?");
            return respuesta
        }
    </script>
    <a href="http://localhost/HospitalFinal/#">HOME</a>
    <h1 class="text-center p-3">AUTOPSIA</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_autopsia.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro Autopsia</h3>
            <?php
            include "controlador/registro_autopsia.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Médico Encargado</label>
                <input type="text" class="form-control" name="mdc_encargado">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI del fallecido</label>
                <input type="text" class="form-control" name="dni_fallecido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">diagnostico</label>
                <input type="text" class="form-control" name="diagnostico">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Morge</label>
                <input type="text" class="form-control" name="id_morge">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Médico Encargado</th>
                        <th scope="col">DNI del fallecido</th>
                        <th scope="col">Diagnostico</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query(" SELECT * FROM autopsia ");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <th scope="row"><?= $datos->id ?></th>
                            <td><?= $datos->mdc_encargado ?></td>
                            <td><?= $datos->dni_fallecido ?></td>
                            <td><?= $datos->diagnostico ?></td>
                            <td>
                                <a href="modificar_autopsia.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="index_autopsia.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <a href="reporte15.php">OBTENER REPORTE</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>