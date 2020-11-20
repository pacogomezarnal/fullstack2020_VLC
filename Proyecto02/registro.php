<?php
    require_once __DIR__.'/vendor/autoload.php';
    use Geeks\Model\Alumno;
    //funcion que comprueba si algún campo está vacio
    function comprobarVacio($formulario){
        $algunoVacio=false;
        foreach($formulario as $clave=>$valor){
            if(empty($valor)) $algunoVacio=true;
        }
        return $algunoVacio;
    }
    //Si algún campo está vacío volvemos al registro
    if(comprobarVacio($_POST)){
        header('Location: index.php?error=Campo vacio');
    }
    //Conexión con la base de datos
    $alumno=new Alumno();
    //Comprobación de los errores
    if($alumno->conector->connect_errno){
      header('Location: index.php?error=Error en la conexión con la base de datos');
    }
    $estadoInsercion=$alumno->insert($_POST["nombre"],$_POST["apellido1"],$_POST["apellido2"],
                    $_POST["correo"],$_POST["convocatoria"],$_POST["proyecto"]);
    //Comprobamos la inserción de campos
    if(!$estadoInsercion){
      header('Location: index.php?error=La inserción ha producido un error');
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de alumnos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<!-- MENU DE NAVEGACIÓN-->
<?php
include_once("./templates/menu.php");
?>
<!-- CONTENIDO-->
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
      <th scope="row">1</th>
      <td ><?=$_POST["nombre"]?></td>
      <td ><?=$_POST["apellido1"]?></td>
      <td ><?=$_POST["apellido2"]?></td>
      <td ><?=$_POST["correo"]?></td>
      <td ><?=$_POST["convocatoria"]?></td>
      <td ><?=$_POST["proyecto"]?></td>
    </tr>
  </tbody>
</table>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>