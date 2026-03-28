
<?php
//Utiliza la extensión PDO para modificar el ejercicio anterior, de tal forma 
//que las credenciales del usuario se comprueben con la información de la nueva 
//tabla "usuarios" creada en la base de datos "proyecto". Si no existe el usuario, 
//o la contraseña es incorrecta, vuelve a pedir las credenciales al usuario.

////Revisa la solución propuesta. Fíjate que se debe usar la función hash para 
//comprobar la contraseña. Si introduces un usuario o contraseña incorrectos, 
//el comportamiento depende del navegador que utilices; algunos te pedirán las 
//credenciales de forma indefinida, y otros un número limitado de veces.
//
// Si el usuario no se ha autentificado, pedimos las credenciales
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header("WWW-Authenticate: Basic realm='Contenido restringido'");
    header("HTTP/1.0 401 Unauthorized");
    die();
}
//Conexión a la base de datos proyecto.
$host = "localhost";
$db = "proyecto";
$user = "gestor";
$pass = "secreto";

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
$conProyecto = new PDO($dsn, $user, $pass);
$conProyecto->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Hacemos la consulta
$consulta = "select * from usuarios where usuario=:u and pass=:p";
$stmt = $conProyecto->prepare($consulta);
$stmt->execute([
    ':u' => $_SERVER['PHP_AUTH_USER'],
    ':p' => hash('sha256', $_SERVER['PHP_AUTH_PW'])
]);
// Si la Consulta No devuelve ninguna fila las credenciales son erroneas.
if ($stmt->rowCount() === 0) {
    header("WWW-Authenticate: Basic realm='Contenido restringido'");
    header("HTTP/1.0 401 Unauthorized");
    $stmt = null;
    $conProyecto = null;
    die();
}
$stmt = null;
$conProyecto = null;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CDN de Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Ejercicio 1.3 Unidad 4 </title>
    </head>
    <body class="bg-info">
        <h4 class="mt-3 text-center font-weight-bold">Solución Ejercicio</h4>
        <div class='container mt-3'>
            <div class='row'>
                <div class='col-md-4 font-weight-bold'>
                    Nombre Usuario:
                </div>
                <div class='col-md-4'>
                    <?= $_SERVER['PHP_AUTH_USER']; ?>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-4 font-weight-bold'>
                    Password Usuario (sha256):
                    <div>
                        <div class='col-md-4'>
                            <?= hash('sha256', $_SERVER['PHP_AUTH_PW']); ?>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>