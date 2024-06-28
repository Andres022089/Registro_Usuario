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
                                        <a class="nav-link" href="registros.php"><i class="fa-solid fa-user-pen"></i> Registros</a>
                                    </li>                                  
                                </ul>                                                              
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
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card-header bg-warning text-center text-white">
                    <h5><i class="fa-solid fa-highlighter"></i> Formulario de Registro</h5>
                    </div>
                    <form action="./controladores/registro.php" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label for="nombre1" class="form-label">Ingrese su Primer Nombre</label>
                                        <input type="text" class="form-control" id="nombre1" name="nombre1" require placeholder="Primer Nombre">
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre2" class="form-label">Ingrese su Segundo Nombre</label>
                                        <input type="text" class="form-control" id="nombre2" name="nombre2"  placeholder="Segundo Nombre">
                                    </div>

                                    <div class="form-group">
                                        <label for="apellido1" class="form-label">Ingrese su Primer Apellido</label>
                                        <input type="text" class="form-control" id="apellido1" name="apellido1" require placeholder="Primer Apellido">
                                    </div>

                                    <div class="form-group">
                                        <label for="apellido2" class="form-label">Ingrese su Primer Nombre</label>
                                        <input type="text" class="form-control" id="apellido2" name="apellido2"  placeholder="Segundo Apellido">
                                    </div>

                                    <div class="form-group">
                                        <label for="documento" class="form-label">Ingrese su Número de Documento</label>
                                        <input type="number" class="form-control" id="documento" name="documento"  placeholder="Número de Documento">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-warning text-white "><i class="fa-solid fa-check"></i> Registrar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>


    <script src="boostrap\js\bootstrap.min.js"></script>
</body>

</html>