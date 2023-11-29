<?php
    $mysqli=new mysqli("localhost","root","","hospital32","3306");
    if ($mysqli->connect_errno) {
        echo 'Fallo en la conexion';
        die();
    }
    else
    {
        echo 'Succesfully Connected';
    }
?>
<!--$mysqli=new mysqli("localhost","root","","hospital32","3305");-->
<!--  -->