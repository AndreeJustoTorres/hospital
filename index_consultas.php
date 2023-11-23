<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas de Base de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            padding: 20px;
        }

        h1, h3 {
            text-align: center;
        }
        h3{
            font-size:20px;
        }
        

        table {
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
        }
        pre {
            background-color: #f8f9fa;
            padding: 10px;
            margin-top: 20px;
            white-space: pre-wrap;
            text-align: center;
            margin-left: auto; /* Centra horizontalmente */
            margin-right: auto; 
        }
        
    </style>



</head>

<body>
    <a href="http://localhost/HospitalFinal/#">HOME</a>
    <div class="container-fluid">
        <h1 class="text-center p-3">Consultas de Base de Datos</h1>

        <!-- Consulta 1: Obtener los pacientes junto con los nombres de sus médicos y el nombre del hospital donde trabajan -->
        <h3>Consulta 1: Obtener los pacientes junto con los nombres de sus médicos y el nombre del hospital donde trabajan</h3>
        <pre>
            SELECT p.nombre AS nombre_paciente, m.nombre AS nombre_medico, h.nombre AS nombre_hospital
            FROM paciente p
            JOIN medico m ON p.id_medico = m.id
            JOIN hospital h ON m.id_hospital = h.id;
        </pre>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Nombre Paciente</th>
                    <th scope="col">Nombre Médico</th>
                    <th scope="col">Nombre Hospital</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "modelo/conexion.php";

                // Ejecutar la consulta
                $sql1 = "SELECT p.nombre AS nombre_paciente, m.nombre AS nombre_medico, h.nombre AS nombre_hospital
                        FROM paciente p
                        JOIN medico m ON p.id_medico = m.id
                        JOIN hospital h ON m.id_hospital = h.id";
                $resultado1 = $conexion->query($sql1);

                // Verificar si hay resultados
                if ($resultado1 !== false && $resultado1->num_rows > 0) {
                    // Mostrar los resultados en la tabla
                    while ($datos = $resultado1->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $datos['nombre_paciente'] . "</td>";
                        echo "<td>" . $datos['nombre_medico'] . "</td>";
                        echo "<td>" . $datos['nombre_hospital'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No se encontraron resultados.</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- Consulta 2: Obtener los nombres de los médicos junto con las especialidades en las que se especializan -->
        <h3>Consulta 2: Obtener los nombres de los médicos junto con las especialidades en las que se especializan</h3>
        <pre>
        SELECT m.nombre AS nombre_medico, e.nombre AS especialidad
        FROM medico m
        JOIN especialidad e ON m.id = e.id_medico;
        </pre>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Nombre Médico</th>
                    <th scope="col">Especialidad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Ejecutar la consulta
                $sql2 = "SELECT m.nombre AS nombre_medico, e.nombre AS especialidad
                        FROM medico m
                        JOIN especialidad e ON m.id = e.id_medico";
                $resultado2 = $conexion->query($sql2);

                // Verificar si hay resultados
                if ($resultado2 !== false && $resultado2->num_rows > 0) {
                    // Mostrar los resultados en la tabla
                    while ($datos = $resultado2->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $datos['nombre_medico'] . "</td>";
                        echo "<td>" . $datos['especialidad'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No se encontraron resultados.</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- Consulta 3: Obtener los nombres de los hospitales junto con el nombre del administrativo encargado -->
        <h3>Consulta 3: Obtener los nombres de los hospitales junto con el nombre del administrativo encargado</h3>
        <pre>
        SELECT h.nombre AS nombre_hospital, a.nombre AS nombre_administrativo, a.apellido AS apellido_administrativo
        FROM hospital h
        JOIN administrativo a ON h.id = a.id_hospital;
        </pre>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Nombre Hospital</th>
                    <th scope="col">Nombre Administrativo</th>
                    <th scope="col">Apellido Administrativo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Ejecutar la consulta
                $sql3 = "SELECT h.nombre AS nombre_hospital, a.nombre AS nombre_administrativo, a.apellido AS apellido_administrativo
                        FROM hospital h
                        JOIN administrativo a ON h.id = a.id_hospital";
                $resultado3 = $conexion->query($sql3);

                // Verificar si hay resultados
                if ($resultado3 !== false && $resultado3->num_rows > 0) {
                    // Mostrar los resultados en la tabla
                    while ($datos = $resultado3->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $datos['nombre_hospital'] . "</td>";
                        echo "<td>" . $datos['nombre_administrativo'] . "</td>";
                        echo "<td>" . $datos['apellido_administrativo'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No se encontraron resultados.</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- Consulta 4: Obtener los nombres de los médicos que tienen al menos un paciente asignado -->
        <h3>Consulta 4: Obtener los nombres de los médicos que tienen al menos un paciente asignado</h3>
        <pre>
        SELECT nombre
        FROM medico
        WHERE id IN (SELECT DISTINCT id_medico FROM paciente);
        </pre>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Nombre Médico</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Ejecutar la consulta
                $sql4 = "SELECT nombre
                        FROM medico
                        WHERE id IN (SELECT DISTINCT id_medico FROM paciente)";
                $resultado4 = $conexion->query($sql4);

                // Verificar si hay resultados
                if ($resultado4 !== false && $resultado4->num_rows > 0) {
                    // Mostrar los resultados en la tabla
                    while ($datos = $resultado4->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $datos['nombre'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td>No se encontraron resultados.</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- Consulta 5: Obtener los nombres de los hospitales que tienen al menos un médico especializado en "Cardiología" -->
        <h3>Consulta 5: Obtener los nombres de los hospitales que tienen al menos un médico especializado en "Cardiología"</h3>
        <pre>
        SELECT nombre
        FROM hospital
        WHERE id IN (SELECT id_hospital FROM medico WHERE id IN (SELECT id_medico FROM especialidad WHERE nombre = 'Cardiologia'));
        </pre>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Nombre Hospital</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Ejecutar la consulta
                $sql5 = "SELECT nombre
                        FROM hospital
                        WHERE id IN (SELECT id_hospital
                                    FROM medico
                                    WHERE id IN (SELECT id_medico
                                                FROM especialidad
                                                WHERE nombre = 'Cardiologia'))";
                $resultado5 = $conexion->query($sql5);

                // Verificar si hay resultados
                if ($resultado5 !== false && $resultado5->num_rows > 0) {
                    // Mostrar los resultados en la tabla
                    while ($datos = $resultado5->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $datos['nombre'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td>No se encontraron resultados.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

