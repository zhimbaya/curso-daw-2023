<!DOCTYPE html>
<!--Haz una página PHP que utilice foreach() para mostrar todos los valores
del array "$_SERVER" en una tabla con dos columnas. La primera columna
debe contener el nombre de la variable, y la segunda su valor.-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-s
              <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ejercicio</title>
    </head>
    <body>
        <table align="center" border="1" cellpadding="2" cellspacing="2">
            <thead style="background-color: grey; text-align: center;">
                <th>Clave</td>
                <th>Valor</td>
            </thead>
            <?php foreach ($_SERVER as $key => $value): ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?></td>
            <tr>
            <?php endforeach ?>
        </table>
    </body>
</html>