<?php
if (!empty($_POST)) { // Compruebo si la ejecución del script se ha solicitado una vez relleno el formulario o no
    $nombre = $_POST['nombre']; // o $_GET['nombre'] dependiendo del tipo del mensaje HTTP utilizado
    $fechaNacimiento = $_POST['fechanacimiento'];
    $centro = $_POST['centro'];
    $grupo = $_POST['grupo'];
    $modulos = $_POST['modulos'] ?? []; // Si no se ha elegido ningún módulo se inicializa con un array vacío
    $totalModulos = count($modulos); // Realizo el cómputo del total de módulo para usarlo luego en la información de la página HTML
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Formularios</title>
    </head>
    <body style="background: gainsboro">
        <?php if (empty($_POST)): ?>
            <form name="formulario" action="<?= $_SERVER['PHP_SELF']?>" method="POST">
                <fieldset style="margin:auto">
                    <legend style="font-weight: bold">Datos</legend>
                    <div>
                        <label for="nombre">Nombre:</Label>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required />
                    </div>
                    <br/>
                    <div>
                        <label for="fechanacimiento">Fecha de Nacimiento:</Label>
                        <input id="fechanacimiento" type="date" name="fechanacimiento" />
                    </div>
                    <br/>
                    <div>
                        <label for="centro">Centro:</Label> 
                        <select id="centro" name="centro">
                            <option value="Alcobendas">Alcobendas</option>
                            <option value="Alcorcón">Alcorcón</option>
                            <option value="Alcalá de Henares">Alcalá de Henares</option>
                        </select> 
                    </div>
                    <br/>
                    <div>
                        <label>Grupo:</label>
                        <div>
                            <input id="d1" type="radio" name="grupo" value="D1" /> 
                            <label for="d1">D1</label>
                        </div>
                        <div>
                            <input id="d2" type="radio" name="grupo" value="D2" /> 
                            <label for="d2">D2</label>
                        </div>
                    </div>
                    <br/>
                    <fieldset>
                        <legend style="font-weight: bold">Elige Modulos</legend>
                        <p><input type="checkbox" name="modulos[]" value="PROG" />Programación.</p>
                        <p><input type="checkbox" name="modulos[]" value="SSII" />Sistemas Informáticos.</p>
                        <p><input type="checkbox" name="modulos[]" value="BBDD" />Bases de Datos.</p>
                        <p><input type="checkbox" name="modulos[]" value="LMSGI" />Lenguaje de Marcas y Sistemas de Gestión de Información.</p>
                        <p><input type="checkbox" name="modulos[]" value="FOL" />Formación y Orientación Laboral.</p>
                    </fieldset>
                    <br/>
                    <div>
                        <input type="submit" value="Enviar" name="enviar" />
                        <input type="reset" value="Limpiar" />
                    </div>
                </fieldset>
            </form>
        <?php else: ?>
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
        <?php endif ?>
    </body>
</html>