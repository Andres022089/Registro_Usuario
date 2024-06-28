<?php

    include './conexion.php';

    if ($_SERVER['REQUEST_METHOD']=== 'POST') {
        
        if(isset($_POST['nombre1']) && $_POST['apellido1'] && $_POST['documento']){

            $nombre1= $_POST['nombre1'];
            $nombre2= $_POST['nombre2'];
            $apellido1= $_POST['apellido1'];
            $apellido2= $_POST['apellido2'];
            $documento= $_POST['documento'];

            $sql= "INSERT INTO persona (nombre1, nombre2, apellido1, apellido2, documento) VALUES(?, ?, ?, ?, ?)";
            $stmt= $conexion->prepare($sql);
            if ($stmt=== false) {
                die('Error en la preparación de la sentencia: ' .  htmlspecialchars($conexion->error));
            }
            $stmt->bind_param('sssss', $nombre1, $nombre2, $apellido1, $apellido2, $documento);
            if ($stmt->execute()) {
                //echo "Registro exitoso";
                header('location:../registros.php ');
                exit();
            }else{
                echo "Error al insertar los registros" . htmlspecialchars($stmt->error);
            }
            $stmt->close();
        }else{
            echo "<script>alert('Hay campos sin registrar información'); setTimeout(function(){window.location.href='../index.php';}, 200);</script>";
        }
    }else{
        echo "No se envio el formulario";
    }
    $conexion->close();
 
?>