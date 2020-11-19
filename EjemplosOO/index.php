<?php
    include "Cerveza.php";

    //Creamos una nueva cerveza
    $birra1=new Cerveza("Estrella");
    $birra2=new Cerveza("1906");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiesta covid-19</title>
</head>
<body>
    <h1>Cervezas</h1>
    <?php
        echo $birra1->nombreCerveza();
    ?>
</body>
</html>