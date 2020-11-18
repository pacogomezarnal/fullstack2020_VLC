<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $numTelf=['fijo'=>'091',
            'movil'=>"687546543",
            'extra'=>array(5,7,9)];
            $numTelf['mama']='54689034';
            foreach ($numTelf as $clave => $valor){
                if($clave!=='extra'){
                    echo "$valor</br>";
                }else{
                    print_r($valor);
                }
            }

    ?>
</body>
</html>