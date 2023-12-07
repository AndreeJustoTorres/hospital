<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cita</title>
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
    <h1 class="text-center p-3">CITA</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_cita.php";
    ?>
   <div class="container-form">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro Cita</h3>
            <?php
            include "controlador/registro_cita.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Hora</label>
                <input type="time" class="form-control" name="hora">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Administrativo</label>
                <input type="text" class="form-control" name="id_administrativo">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4 myTable">
            <table class="table table-primary  table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider"> 
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query(" SELECT * FROM cita ");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <th scope="row"><?= $datos->id ?></th>
                            <td><?= $datos->phone ?></td>
                            <td><?= $datos->fecha ?></td>
                            <td><?= $datos->hora ?></td>
                            <td>
                                <a href="modificar_cita.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="index_cita.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
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