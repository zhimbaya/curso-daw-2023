<?php
if (filter_has_var(INPUT_POST, "enviar")) {
    define('NOMBRE_INVALIDO', '**Nombre inválido');
    define('CLAVE_INVALIDA', '**Clave inválida');
    define('CORREO_INVALIDO', '**Correo inválido');
    define('TEL_INVALIDO', '**Teléfono inválido');
    define('EDAD_INVALIDA', '**Información de edad inválida');
    define('FECHANAC_INVALIDA', '**Fecha de Nacimiento inválida');
    
    // Lectura, saneamiento y validación del dato de nombre
    // 3 a 25 caracteres en mayúsculas y minúsculas y espacio en blanco
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_UNSAFE_RAW);
    $nombreError = filter_var($nombre, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => "/^[a-z A-Z]{3,25}$/"]]) === false;

    // Lectura, saneamiento y validación del dato de contraseña
    // 6 a 8 caracteres con mayúsculas, minúsculas, digitos y los símbolos !@#$%^&*()+
    $clave = filter_input(INPUT_POST, 'clave', FILTER_UNSAFE_RAW);
    $claveError = filter_var($clave, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => "/^[\w!@#\$%\^&\*\(\)\+]{6,8}$/"]]) === false;

    // Lectura, saneamiento y validación del dato de correo
    // Formato correcto de correo
    $correo = filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_EMAIL);
    $correoError = filter_var($correo, FILTER_VALIDATE_EMAIL) === false;

    // Lectura del dato de fecha. La fecha ya viene validada del formulario
    $fechaNac = filter_input(INPUT_POST, 'fechanac', FILTER_UNSAFE_RAW);
    $fechaNacError = empty($fechaNac);

    // Lectura, saneamiento y validación del dato de telefono
    // Números sin blancos    
    $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT);
    $telError = filter_var($tel, FILTER_VALIDATE_INT) === false;

    // Lectura del dato de tienda
    $tienda = filter_input(INPUT_POST, 'tienda');

    // Lectura, saneamiento y validación del dato de edad. Solo pueden acceder mayores de edad
    $edad = filter_input(INPUT_POST, 'edad', FILTER_UNSAFE_RAW);
    $edadError = is_null($edad);

    // Validación del dato de suscripcion. Se convierte la respuesta a un valor booleano
    $suscripcion = filter_input(INPUT_POST, 'suscripcion', FILTER_VALIDATE_BOOLEAN) ?? false;

    // Error summary
    $formError = $nombreError || $claveError || $correoError || $telError || $fechaNacError || $edadError;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de Registro</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet_1.css">
    </head>
    <body>
        <!-- Si se solicita el formulario o se detecan errores en los datos -->
        <?php if (!filter_has_var(INPUT_POST, "enviar") || $formError): ?> 
            <div class="flex-pedad">
                <h1>Customer Registration</h1>
                <form class="capaform" name="registerform" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" novalidate>
                    <div class="flex-outer">
                        <div class="form-section">
                            <label for="nombre">Nombre:</label> 
                            <input id="nombre" type="text" name="nombre" placeholder="Introduce el nombre" value="<?= ($nombre ?? '') ?>" />
                            <?php if (isset($nombreError) && $nombreError): ?>
                                <div class="error-section">
                                    <div class="error">
                                        <?= constant("NOMBRE_INVALIDO") ?>
                                    </div>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="form-section">
                            <label for="clave">Clave:</label> 
                            <input id="clave" type="clave" name="clave" placeholder="Introduce la clave" value="<?= ($clave ?? '') ?>" />
                            <?php if (isset($claveError) && $claveError): ?>
                                <div class="error-section">
                                    <div class="error"><?= constant("CLAVE_INVALIDA") ?></div>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="form-section">
                            <label for="correo">Correo:</label>
                            <input id="correo" type="text"  name="correo" placeholder="Introduce el correo" value="<?= ($correo ?? '') ?>" />
                            <?php if (isset($correoError) && $correoError): ?>
                                <div class ="error-section">
                                    <div class="error"><?= constant("CORREO_INVALIDO") ?></div>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="form-section">
                            <label for="fechanac">Fecha de Nacimiento:</Label>
                            <input id="fechanac" type="date" name="fechanac" placeholder="Introduce la fecha de nacimiento" value="<?= ($fechaNac ?? '') ?>" />
                            <?php if (isset($fechaNacError) && $fechaNacError): ?>
                                <div class ="error-section">
                                    <div class="error"><?= constant("FECHANAC_INVALIDA") ?></div>
                                </div>
                            <?php endif ?> 
                        </div>
                        <div class="form-section">
                            <label for="tel">Teléfono:</Label> 
                            <input id="telefono" type="tel" name="tel" placeholder="Introduce el teléfono" value="<?= ($tel ?? '') ?>" />
                            <?php if (isset($telError) && $telError): ?>
                                <div class ="error-section">
                                    <div class="error"><?= constant("TEL_INVALIDO") ?></div>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="form-section">
                            <label for="tienda">Tienda Preferida:</Label> 
                            <select id="tienda" name="tienda">
                                <option value="Madrid" <?= (isset($tienda) && $tienda === "Madrid") ? "selected" : "" ?>>Madrid</option>
                                <option value="Barcelona" <?= (isset($tienda) && $tienda === "Barcelona") ? "selected" : "" ?>>Barcelona</option>
                                <option value="Valencia" <?= (isset($tienda) && $tienda === "Valencia") ? "selected" : "" ?>>Valencia</option>
                            </select> 
                        </div>
                        <div class="form-section">
                            <label>Edad:</label>
                            <div class="select-section">
                                <div>
                                    <input id="-25" type="radio" name="edad" value="-25" <?= ($edad ?? false) && ($edad == '-25') ? "checked" : '' ?>/> 
                                    <label for="-25">Younger than 25</label>
                                </div>
                                <div>
                                    <input id="25-50" type="radio" name="edad" value="25-50" <?= ($edad ?? false) && ($edad == '25-50') ? "checked" : '' ?> /> 
                                    <label for="25-50">Between 25 and 50</label>
                                </div>
                                <div>
                                    <input id="50-" type="radio" name="edad" value="50-" <?= ($edad ?? false) && ($edad == '50-') ? "checked" : '' ?> />
                                    <label for="50-">Older than 50</label>
                                </div>
                            </div>
                            <?php if (isset($edadError) && $edadError): ?>
                                <div class="error-section">
                                    <div class="error"><?= constant("EDAD_INVALIDA") ?></div>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="form-section">
                            <label for="suscripcion">Suscripción revista:</label>
                            <input id="suscripcion" type="checkbox"  name="suscripcion" <?= ($suscripcion ?? false) ? "checked" : '' ?>/> 
                        </div>
                        <div class="form-section">
                            <div class="submit-section">
                                <input class="submit" type="submit" value="Enviar" name="enviar" /> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        <?php else: ?> <!-- Si la validación de los datos ha sido correcta -->
            <div class="summary-section">
                <h1>Datos del Cliente</h1>
                <p>Nombre: <?= $nombre ?></p>
                <p>Clave: <?= $clave ?></p>
                <p>Correo: <?= $correo ?></p>
                <p>Fecha de Nacimiento: <?= $fechaNac ?></p>
                <p>Telephone: <?= $tel ?></p>
                <p>Tienda: <?= $tienda ?></p>
                <p>Edad: <?=
                    match ($edad) {
                    '-25' => "Mas joven de 25", 
                    '25-50' => "Entre 25 y 50", 
                    '50+' => "Mayor de 50"
                    }
                    ?></p>
                <p>Suscripción: <?= ($suscripcion) ? "Suscrito" : "No suscrito" ?>
            </div>
        <?php endif ?>
    </body>
</html>