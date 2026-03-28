<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Usuario no reconocido!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS BootStrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Ejemplo Tema 4</title>
    </head>
    <body style='background:gray'>
        <h3 class='text-center mt-3'>Directivas PHP_AUTH</h3>
        <div class='container mt-3'>
            <div class="card text-white bg-primary mb-3 m-auto" style="max-width:22rem;">
                <div class="card-header font-weight-bold text-center">PHP_AUTH</div>
                <div class="card-body" style='font-size:1.2em'>
                    <p class="card-text">
                        <span class='font-weight-bold'>Usuario:</span> "<?= $_SERVER['PHP_AUTH_USER'] ?>"</p>
                    <p class="card-text">
                        <span class='font-weightbold'>Contraseña:</span>"<?= $_SERVER['PHP_AUTH_PW'] ?>"</p>
                    <p class="card-text">
                        <span class='font-weight-bold'>Método Autentificación:</span>"<?= $_SERVER['AUTH_TYPE'] ?>"</p>
                </div>
            </div>
        </div>
    </body>
</html>
