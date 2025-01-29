<?php
/*
  Escribe un programa PHP que muestre en pantalla la tabla de multiplicar de
  los números pares menores de 10. Usa dos bucles encadenados. El primer
  bucle recorre los números enteros del al 10 y el segundo bucle construye la
  tabla de multiplicar para los números pares.
 */

define('NUMERO', 5);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Estilo de escritura de script PHP</title>
    </head>
    <body>
        <h1>Método</h1>
        <h2>Genero el código HTML incrustando pequeños bloques de PHP en có
            <table class="default">
                <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <?php if ($i % 2 == 0) { ?>
                        <tr>
                            <td><?= constant('NUMERO') . "x $i =" . constant('NUMERO') * $i ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </table>
            <!--<h2>El total de los factores es array_sum(array_map((function))) ?></h2>-->
    </body>
</html>
