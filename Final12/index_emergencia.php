<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergencia</title>
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
    <h1 class="text-center p-3">EMERGENCIA</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_emergencia.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro Emergencia</h3>
            <?php
            include "controlador/registro_emergencia.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Encargado</label>
                <input type="text" class="form-control" name="encargado">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Turno</label>
                <input type="text" class="form-control" name="turno">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Recepcionista</label>
                <input type="text" class="form-control" name="recepcionista">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Hospital</label>
                <input type="text" class="form-control" name="id_hospital">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Encargado</th>
                        <th scope="col">Turno</th>
                        <th scope="col">Recepcionista</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query(" SELECT * FROM emergencia ");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <th scope="row"><?= $datos->id ?></th>
                            <td><?= $datos->encargado ?></td>
                            <td><?= $datos->turno ?></td>
                            <td><?= $datos->recepcionista ?></td>
                            <td>
                                <a href="modificar_emergencia.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="index_emergencia.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <a href="reporte19.php">OBTENER REPORTE</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>