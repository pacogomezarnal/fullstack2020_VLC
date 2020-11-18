<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php
        for ($i=0; $i < 10; $i++) {
    ?>
        <tr>
            <td><?=$i?></td>
            <td>r</td>
            <td>f</td>
            <td>e</td>
        </tr>
    <?php    
        }
    ?>
    </table>
</body>
</html>