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
    $conProyecto = null; //cerramos la conexion
} catch (PDOexception $e) {
    die("Error en la conexión o la consulta: " . $e->getMessage());
}
?>

<?php while ($registro = $resultado->fetch()): ?>
    <p><?= "Producto {$registro['producto']}: {$registro['unidades']} unidades." ?></p>
<?php endwhile ?>

 
<?php while ($registro = $resultado->fetch(PDO::FETCH_OBJ)): ?>
    <p><?= "Producto {$registro->producto}: {$registro->unidades} unidades." ?></p>
<?php endwhile ?>