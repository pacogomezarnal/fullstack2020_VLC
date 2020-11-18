<?php
    $error=false;
    $errorMSg="";

    if(empty($_POST["nombre"])){
        $error=true;
        $errorMSg="Falta nombre";
    }elseif(empty($_POST["apellido1"])){
        $error=true;
        $errorMSg="Falta apellido 1";
    }elseif(empty($_POST["apellido2"])){
        $error=true;
        $errorMSg="Falta apellido 2";
    }elseif(empty($_POST["correo"])){
        $error=true;
        $errorMSg="Falta Correo";
    }elseif(empty($_POST["convocatoria"])){
        $error=true;
        $errorMSg="Falta convocatoria";
    }
    elseif(empty($_POST["proyecto"])){
        $error=true;
        $errorMSg="Falta proyecto";
    }

    //Conmprobamos errores y devolvemos error
    if($error){
        header("Location: http://localhost:8080/index.php?error=$errorMSg");
    }
?>
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
        <h2>Alumno recibido</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido 1</th>
                    <th scope="col">Apellido 2</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Convocatoria</th>
                    <th scope="col">Proyecto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><?=$_POST['nombre'];?></td>
                    <td><?=$_POST["apellido1"];?></td>
                    <td><?=$_POST["apellido2"];?></td>
                    <td><?=$_POST["correo"];?></td>
                    <td><?=$_POST["convocatoria"];?></td>
                    <td><?=$_POST["proyecto"];?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>