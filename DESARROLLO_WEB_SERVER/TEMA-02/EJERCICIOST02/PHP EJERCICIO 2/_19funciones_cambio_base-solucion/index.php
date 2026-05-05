<?php
include "funciones_cambio_base.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conversión de números</title>
    </head>
    <body>
        <h1><?= "El número 567 en base 8 es equivalente al número " . x2dec(568, 8) . " en base 10" ?></h1>
        <h1><?= "El número 345 en base 10 es equivalente al número " . dec2x(345) . " en base 2" ?></h1>
        <h1><?= "El número 123 en base 16 es equivalente al número " . x2y(123, 16, 2) . " en base 2" ?></h1>
        <h1><?= "El número 32 en base 5 es equivalente al número " . x2y(32, 5, 10) . " en base 10" ?></h1>
    </body>
</html>

