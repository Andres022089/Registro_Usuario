<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./awemsome/css/all.css">
</head>

<body>

        <?php
            $id_usuario= $_GET['id'];
            //var_dump($id_usuario);

            include "./controladores/conexion.php";
            $query="SELECT * FROM persona WHERE id_usuario= ?";
            $stmt= $conexion->prepare($query);
            $stmt->bind_param('i', $id_usuario);
            $stmt->execute();
            $resultado= $stmt->get_result();
            $usuario= $resultado->fetch_assoc();

            $stmt->close();
            $conexion->close();   
        ?>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-text">
                <br>
            </span>
        </div>
    </nav>
    <div class="content">
        <div class="container ">
            <div class="row">
                <div class="col md-2"></div>
                <div class="col md-8">
                    <div class="card-header bg-success text-center text-white">
                        <h5><i class="fa-solid fa-user-pen"></i> Actualizar Registro</h5>
                    </div>

                    <form method="POST" action="controladores/update.php ">
                        <div class="col-sm-12">
                            <br>
                            <div class="mb-3">
                                <label for="nombre1" class="form-label">Primer Nombre</label>
                                <input type="text" class="form-control" id="nombre1" name="nombre1" value="<?php echo mb_strtoupper($usuario['nombre1']); ?>">
                                <input type="hidden" name='id' value="<?php echo $usuario['id_usuario']?>" >
                            </div>
                            <div class="mb-3">
                                <label for="nombre2" class="form-label">Segundo Nombre</label>
                                <input type="text" class="form-control" id="nombre2" name="nombre2" value="<?php echo mb_strtoupper($usuario['nombre2']);?>">
                            </div>
                            <div class="mb-3">
                                <label for="apellido1" class="form-label">Primer Apellido</label>
                                <input type="text" class="form-control" id="apellido1" name="apellido1" value="<?php echo mb_strtoupper($usuario['apellido1']);?>">
                            </div>
                            <div class="mb-3">
                                <label for="apellido2" class="form-label">Segundo Apellido</label>
                                <input type="text" class="form-control" id="apellido2" name="apellido2" value="<?php echo mb_strtoupper($usuario['apellido2']);?>">
                            </div>
                            <div class="mb-3">
                                <label for="documento" class="form-label">Documento</label>
                                <input type="number" class="form-control" id="documento" name="documento" value= "<?php echo $usuario['documento'];?>">
                            </div>
                            <button type="submit"  class="btn btn-success"><i class="fa-solid fa-user-check"></i> OK</button>
                            <a class="btn btn-success "href="index.php"><i class="fa-solid fa-circle-left"></i> Regresar</a>
                        </div>
                    </form>
                </div>
                <div class="col md-2"></div>
            </div>
        </div>
    </div>

    <script src="./boostrap/js/bootstrap.min.js"></script>
</body>

</html>