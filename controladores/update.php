<?php
     ini_set('display_errors', 1); //metodos para visualizar los errores
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include "conexion.php";

    //Verificamos que los datos hayan sido enviados por el formulario
   if($_SERVER["REQUEST_METHOD"]== "POST"){
        // Obtener y sanitizar los datos del formulario
        $id_usuario= intval($_POST['id']);
        $nombre1= htmlspecialchars($_POST['nombre1']);
        $nombre2= htmlspecialchars($_POST['nombre2']);
        $apellido1= htmlspecialchars($_POST['apellido1']);
        $apellido2= htmlspecialchars( $_POST['apellido2']);
        $documento= intval($_POST['documento']);

        $query= "UPDATE persona SET nombre1= ?, nombre2= ?, apellido1= ?, apellido2= ?, documento= ?  WHERE id_usuario= ?";
        $stmt= $conexion->prepare($query);
        $stmt->bind_param('ssssii', $nombre1, $nombre2, $apellido1, $apellido2, $documento, $id_usuario);

        if ($stmt->execute()) {
            header('location: ../registros.php');
        }else{
            echo "Error al actualizar la consulta: " . $conexion->error;
        }
        $stmt->close();
        $conexion->close();

   }echo "Error en los datos del formulario";

?>