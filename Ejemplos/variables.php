<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        var nombre="Paquito";
        console.log(nombre);
    </script>
</head>
<body>
    <?php
        $nombre;
        $edad=45;
        $altura=1.75;
        $tieneTara=True;

        $numTelf=['fijo'=>'091',
                  'movil'=>"687546543",
                  'extra'=>array(5,7,9)];
        $numTelf['mama']='54689034';

        echo "<h2>Mi nombre es $nombre</h2><h3>mido $altura</h3>";
        echo "<br/>";
        echo $numTelf['fijo']."<br/>";
        echo $numTelf['movil']."<br/>";
        echo $numTelf['extra'][1]."<br/>";
        echo $numTelf['mama']."<br/>";

        var_dump($numTelf);
        echo "<br/>";
        print_r($numTelf);


    ?>
</body>
</html>



