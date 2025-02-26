<?php
//Según la información que figura en la tabla stock de la base de datos proyecto, 
//la tienda 1 (CENTRAL) tiene 2 unidades del producto de código PAPYRE62GB y la 
//tienda 3 (SUCURSAL2) ninguno. Suponiendo que los datos son esos (no hace falta 
//que los compruebes en el código), utiliza una transacción para mover una unidad 
//de ese producto de la tienda 1 a la tienda 3.

$host = "localhost";
$db = "proyecto";
$user = "gestor";
$pass = "secreto";
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
try {
    $conProyecto = new PDO($dsn, $user, $pass);
    $conProyecto->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error con la conexión a la base de datos" . $e->getMessage());
}
$commit = true;
// Iniciamos la transacción
$conProyecto->beginTransaction();
$update = "update stocks set unidades=1 where producto=(select id from productos where nombre_corto='PAPYRE62GB') AND tienda=1";
if (!$conProyecto->exec($update))
    $commit = false;
$insert = "insert into stocks select id, 2, 1 from productos where nombre_corto='PAPYRE62GB'"; //es equivalente a insert into stocks values(15, 2, 1)
if (!$conProyecto->exec($insert))
    $commit = false;
// Si fue bien, confirmamos los cambios
// y en caso contrario los deshacemos
if ($commit) {
    $conProyecto->commit();
} else {
    $conProyecto->rollBack();
}
//Cerramos la conexión.
$conProyecto = null;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0,
              maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- enlaces para usar Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <title>Transacciones en PDO </title>
    </head>
    <body class="bg-info">
        <h3 class="text-center mt-2 font-weight-bold">Ejercicio Transacción con PDO </h3>
        <div class="container mt-3">
            <?php if ($commit): ?>
                <p class='text-primary font-weight-bold'>Los cambios se realizaron correctamente.</p>
            <?php else: ?>
                <p class='text-danger font-weight-bold'>No se han podido realizar los cambios.</p>
            <?php endif ?>
        </div>
    </body>
</html>