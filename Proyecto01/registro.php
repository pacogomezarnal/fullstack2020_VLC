<?php
    $errorMsg="";
    
    //FUNCION QUE REALICE LA COMPROBACIÓN
    function comprobarCampos(&$errorMsg,$formulario){
        $listaErrores=["nombre"=>"nombre","apellido1"=>"primer apellido"];
        $algunCampoVacio=false;
        foreach ($formulario as $clave => $valor) {
            if(empty($valor)){
                $algunCampoVacio=true;
                $errorMsg=$listaErrores[$clave];
                break; 
            }
        }
        return $algunCampoVacio;
    }

    

    //Conmprobamos errores y devolvemos error
    if(comprobarCampos($errorMsg,$_POST)){
        header("Location: http://localhost:8080/index.php?error=Campo $errorMsg vacio");
    }

    //Conectar contra la DB
    $conector = new mysqli("localhost", "root", "", "clases");
    if ($conector->connect_errno){
        header("Location: http://localhost:8080/index.php?error=Error de conexion");
    }

    $consulta="INSERT INTO 
    alumnos (nombre,apellido1,apellido2,correo,proyecto,convocatoria,edad) 
    VALUES ('$_POST[nombre]','$_POST[apellido1]','$_POST[apellido2]',
    '$_POST[correo]','$_POST[proyecto]','$_POST[convocatoria]','$_POST[edad]')";
    //Insertar en la base de datos
    $resultado=$conector->query($consulta);
    if(!$resultado){
        //ERROR DE INSERCION
    }

?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de alumnos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <?php include "./template/nav.php"?>
    <!-- CONTENIDO -->
    <div class="container">
        <h2>Alumno recibido</h2>
        <?php if(!$resultado){?>
            <div class='alert alert-danger' role='alert'><?= $conector->error?></div>
        <?php
        }else{?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido 1</th>
                    <th scope="col">Apellido 2</th>
                    <th scope="col">Edad</th>
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
                    <td><?=$_POST["edad"];?></td>
                    <td><?=$_POST["correo"];?></td>
                    <td><?=$_POST["convocatoria"];?></td>
                    <td><?=$_POST["proyecto"];?></td>
                </tr>
            </tbody>
        </table>
        <?php } ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>