<?php
/*
  Carlos ha decidido hacer su primer programa, un taller mecánico les ha
  propuesto que le hagan una web que, en función del tipo de motor, recomiende
  un aceite u otra.
  Haz una página que en función de la variable $motor que puede tomar los
  valores 1 (Gasolina), 2 (Diésel), 3 (Motocicleta), 4 (Eléctrico) nos muestre el tipo
  de motor, es decir si $motor=1 nos mostrará "El motor es de Gasolina". Hazlo
  de dos formas, con bucles if y con switch.
 */
$motor = 2; //podemos dar valores 2,3,4, o probar uno no válido 
//1.- Con if elseif else --------------------------------------------- 
if ($motor == 1) {
    $descripcion = "El motor es de Gasolina";
} elseif ($motor == 2) {
    $descripcion = "El motor es Diesel";
} elseif ($motor == 3) {
    $descripcion = "El motor es de una Motocicleta";
} elseif ($motor == 4) {
    $descripcion = "El motor es Eléctrico";
} else {
    $descripcion = "Error, el tipo de motor NO es válido";
}

//2.- con switch -----------------------------------------------------
$motor2 = 3;
switch ($motor2) {
    case 1:
        $descripcion = "El motor es de Gasolina";
        break;
    case 2:
        $descripcion = "El motor es Diesel";
        break;
    case 3:
        $descripcion = "El motor es de una Motocicleta";
        break;
    case 4:
        $descripcion = "El motor es Eléctrico";
        break;
    default:
        $descripcion = "Error, el tipo de motor NO es válido";
}
?>
<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.">
        <title>Taller</title>
    </head>
    <body style = "background:azure">
        <h3 style = "text-align:center;">Taller</h3>
        <p style = "text-align:center;"> <?= $descripcion ?></p>
    </body>
</html>