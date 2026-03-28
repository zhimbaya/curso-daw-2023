<?php
$host = "localhost";
$db = "proyecto";
$user = "gestor";
$pass = "secreto";
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
try {
    $conProyecto = new PDO($dsn, $user, $pass);
    $conProyecto->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $resultado = $conProyecto->query("SELECT producto, unidades FROM stocks");
    $registros = $resultado->fetchAll();
    $conProyecto = null; //cerramos la conexion
} catch (mysqli_sql_exception $e) {
    die("Error en la conexión o la consulta: " . $e->getMessage());
}
?>
<?php foreach ($registros as $registro): ?>
    <p><?= "Producto {$registro['producto']}: {$registro['unidades']} unidades." ?></p>
<?php endforeach ?>