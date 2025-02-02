<?php
/*
  Con la ayuda de las funciones que necesites, haz un programa que, dados dos número
 * enteros positivos,inicio y cantidad, 
 * nos muestre cantidad de números primos a partir de inicio, 
 * si no pasamos ningún valor cantidad=10
 */

function isPrimo($num) {
    $isPrimo = !($num === 1);
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrimo = false;
            break;
        }
    }
    return $isPrimo;
}

if (isPrimo(1) == true) {
    echo 'es Primo';
} else {
    echo 'NO es Primo';
}

function mostrarPrimos($inicio, $cantidad = 10) {
    //si no especifico nada, cantidad=10
    $cont = 0;
    do {
        if (isPrimo($inicio)) {
            echo '<strong>' . ++$cont . '=></strong> ' . $inicio . '<br>';
        }
        $inicio++;
    } while ($cont < $cantidad);
}
?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio Primos</title>
    </head>
    <body style="background:bisque">
        <h3 style="text-align:center; font-weight:bold">Solución Propuesta Ejercicio Primos</h3>
        <?php
            $inicio = 1;
            // En este caso se usa el valor del parámetro $cantidad por defecto
            mostrarPrimos($inicio); 
            //Nos deberá mostrar los primeros 10 primos a partir del número 1
        ?>
    </body>
</html>