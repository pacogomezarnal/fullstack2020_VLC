<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de alumnos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <!-- MENU DE NAVEGACIÓN -->
    <nav class="navbar fixed-top navbar-dark bg-dark">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Registro</a>
        </li>
        </ul>
    </nav>
    <!-- CONTENIDO -->
    <div class="container">
        <h3>Nuevo alumno</h3>
        <form action="registro.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Paco">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="apellido">Apellido 1</label>
                    <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Gómez">
                </div>
                <div class="form-group col-md-6">
                    <label for="apellido2">Apellido 2</label>
                    <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Arnal">
                </div>
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" >
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="convocatoria">Convocatoria</label>
                    <input type="text" class="form-control" id="convocatoria" name="convocatoria" >
                </div>
                <div class="form-group col-md-6">
                    <label for="proyecto">Proyecto/Seminario</label>
                    <select id="proyecto" class="form-control" name="proyecto">
                        <option selected>S3</option>
                        <option>P7</option>
                        <option>P9</option>
                        <option>P10</option>
                        <option>POP2</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form> 
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>