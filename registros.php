<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boostrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="./awemsome/css/all.css">
    <title>Registro Usuario</title>
</head>

<body>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="https://getbootstrap.com" target="_blank"><i class="fa-brands fa-bootstrap"></i> Boostrap 5</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="./index.php"><i class="fa-solid fa-house"></i> Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://fontawesome.com" target="_blank"><i class="fa-brands fa-font-awesome"></i> Fontawesome</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-info card-outlibe text-center">
                        <h4><i class="fa-solid fa-user-group"></i> Registro de Personas</h4>
                        <?php 
                            include "./controladores/conexion.php";
                            $consulta= $conexion->query("SELECT * FROM persona");
                            $row = mysqli_num_rows($consulta);                                       
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Documento</th>
                                <th scope="col">Primer Nombre</th>
                                <th scope="col">Segundo Nombre</th>
                                <th scope="col">Primer Apellido</th>
                                <th scope="col">Segundo Apellido</th>
                                <th scope="col text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($guardar= $consulta->fetch_assoc()) { ?>                                       
                                    <tr class="table-info">
                                        <th scope="row"><?php echo $guardar['id_usuario'];?></th>
                                        <th><?php echo $guardar['documento'];?></th>
                                        <td><?php echo  mb_strtoupper($guardar['nombre1']);?></td>
                                        <td><?php echo  mb_strtoupper($guardar['nombre2']);?></td>
                                        <td><?php echo  mb_strtoupper($guardar['apellido1']);?></td>
                                        <td><?php echo  mb_strtoupper($guardar['apellido2']);?></td>
                                        <td>
                                            
                                            
                                            <a class="btn btn-warning text-white" href="actualizar.php?id=<?php echo $guardar['id_usuario'];?>" role="button"><i class="fa-solid fa-file-pen"></i> Editar</a>
                                            <a class="btn btn-danger" href="./controladores/eliminar.php?id=<?php echo $guardar['id_usuario'];?>" role="button"><i class="fa-solid fa-user-xmark"></i> Eliminar</a>
                                        <td>
                                    </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="text-center ">
                <a class="btn btn-success " href="./index.php" role="button"><i class="fa-solid fa-user-plus"></i> Nuevo Registro</a>
            </div>
        </div>
    </section>
    
    <script src="boostrap\js\bootstrap.min.js"></script>
</body>

</html>