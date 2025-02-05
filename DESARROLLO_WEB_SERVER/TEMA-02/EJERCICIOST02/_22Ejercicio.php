<?php
// Inicializo las variables del script a partir de los datos introducidos en el formulario
$nombre = $_POST['nombre']; // o $_GET['nombre'] dependiendo del tipo del mensaje HTTP utilizado
$fechaNacimiento = $_POST['fechanacimiento'];
$centro = $_POST['centro'];
$grupo = $_POST['grupo'];
$modulos = $_POST['modulos'] ?? []; // Si no se ha elegido ningún módulo se inicializa con un array vacío
$totalModulos = count($modulos); // Realizo el cómputo del total de módulo para usarlo luego en la información de la página HTML
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Procesa Formulario</title>
    </head>
    <body style="background:bisque">
        <h3 style="text-align:center; font-weight:bold">Datos del formulario</h3>
        <p>Tu nombre es: <?= $nombre ?></p> <!-- Incrusto el valor de evaluar la variable en la página dinámica -->
        <p>Tu fecha de nacimiento es: <?= $fechaNacimiento ?></p>
        <p>Tu centro es: <?= $centro ?></p>
        <p>Tu grupo es: <?= $grupo ?></p>
        <?php if (!empty($modulos)): ?> <!-- Decido si quiero incluir el listado de módulos en la página resultado o no -->
            <br>Los módulos elegidos han sido: <?= $totalModulos ?> <!-- Incrusto el valor del total de módulos calculado al principio del script -->
            <ol>
                <?php foreach ($modulos as $modulo): ?> <!-- Programo un bucle que incluya un item HTML por cada módulo de la lista --> 
                    <li><?= $modulo ?></li> <!-- Incrusto el valor del modulo en curso de la lista -->
                <?php endforeach ?> <!-- Cierro el foreach -->
            </ol>
        <?php endif ?> <!-- Cierro el if -->
        <br>Has elegido un total de: <?= $totalModulos ?> módulos <!-- Incrusto el valor del total de módulos calculado al principio del script -->
    </body>
</html>