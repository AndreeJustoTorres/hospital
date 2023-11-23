<?php

$mysqli=new mysqli("localhost","root","","hospital32","3305");
if ($mysqli->connect_errno) {
    echo 'Fallo en la conexion';
    die();
}

?>