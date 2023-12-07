<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/61ac329b12.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("Estás seguro que desea eliminar?");
            return respuesta
        }
    </script>
    <a class="btn btn-outline-info" href="http://localhost/HospitalFinal/#">HOME</a>
    <h1 class="text-center p-3">MORGE</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_morge.php";
    ?>
    <div class="container-form"> 
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro Morge</h3>
            <?php
            include "controlador/registro_morge.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Capacidad</label>
                <input type="text" class="form-control" name="capacidad">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fallecido</label>
                <input type="text" class="form-control" name="fallecido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Hospital</label>
                <input type="text" class="form-control" name="id_hospital">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4 myTable"> 
             <table class="table table-primary  table-hover"> 
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Capacidad</th>
                        <th scope="col">Fallecido</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query(" SELECT * FROM morge ");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <th scope="row"><?= $datos->id ?></th>
                            <td><?= $datos->capacidad ?></td>
                            <td><?= $datos->fallecido ?></td>
                            <td>
                                <a href="modificar_morge.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="index_morge.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <a class="btn btn-outline-warning"  href="reporte.php">OBTENER REPORTE</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>