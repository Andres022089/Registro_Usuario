<?php
    //ini_set('display_errors', 1); //metodos para visualizar los errores
    //ini_set('display_startup_errors', 1);
    //error_reporting(E_ALL);
    //archivo de conexión a la base de datos
    include "conexion.php" ;

    //sanitizar el id
    $id_usuario= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    //print_r($id_usuario);

    $sql="DELETE FROM persona WHERE id_usuario = ?";
    $stmt= $conexion->prepare($sql);
    if ($stmt=== false) {
        die('Error en la preparación de la consulta '. htmlspecialchars($conexion->error));
    }
    $stmt->bind_param('i', $id_usuario);
    if ($stmt->execute()) {
        echo "<script>alert('Registro Eliminado'); setTimeout(function(){window.location.href='../registros.php';}, 200);</script>";
        exit();
    }else{
        echo "Error al eliminar los registros" . htmlspecialchars($stmt->error);
    }
    $stmt->close();
    $conexion->close();

?>
