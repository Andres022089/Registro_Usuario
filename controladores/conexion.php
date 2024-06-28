<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '220988ab';
    $database = 'registro_usuario';

    $conexion = mysqli_connect($hostname, $username, $password, $database);

    if (!$conexion) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    } else {
        //echo "Conexión exitosa a la base de datos";
    }
?>
