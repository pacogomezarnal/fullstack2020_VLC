<?php
    require_once __DIR__.'/vendor/autoload.php';
    use Geeks\Model\Alumno;

    //Conexión con la base de datos
    $alumno=new Alumno();
    //Comprobación de los errores
    if($alumno->conector->connect_errno){
      header('Location: index.php?error=Error en la conexión con la base de datos');
    }
    $listaAlumnos=$alumno->all();
    //Comprobamos la inserción de campos
    if(!$listaAlumnos){
      header('Location: index.php?error=El listado ha producido un error');
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de alumnos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="./fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<!-- MENU DE NAVEGACIÓN-->
<?php
include_once("./templates/menu.php");
?>
<!-- CONTENIDO-->
<div class="container">
  <h2>Listado de alumnos</h2>
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
      <th scope="col">Ver</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach($listaAlumnos as $fila)
      {
    ?>
    <tr>
      <th scope="row"><?=$fila["id"]?></th>
      <td ><?=$fila["nombre"]?></td>
      <td ><?=$fila["apellido1"]?></td>
      <td ><?=$fila["apellido2"]?></td>
      <td ><?=$fila["correo"]?></td>
      <td ><?=$fila["convocatoria"]?></td>
      <td ><?=$fila["proyecto"]?></td>
      <td ><a href="alumno.php?id=<?=$fila["id"]?>"><i class="far fa-eye"></i></a></td>
      <td ><a href="edit.php?id=<?=$fila["id"]?>"><i class="far fa-edit"></i></a</td>
    </tr>
    <?php }?>
  </tbody>
</table>

</div>
</body>
<html