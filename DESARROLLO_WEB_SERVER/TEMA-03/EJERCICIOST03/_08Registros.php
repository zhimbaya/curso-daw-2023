<?php
$controlador = new mysqli_driver();
$controlador->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
$conProyecto = new mysqli('localhost', 'gestor', 'secreto', 'proyecto');
$stmt = $conProyecto->stmt_init();
try {
    $stmt->prepare('SELECT producto, unidades FROM stocks WHERE unidades<2');
    $stmt->execute();
} catch (mysqli_sql_exception $e) {
    die("Error en la preparación o ejecución de la consulta: " . $e->getMessage());
}
$stmt->bind_result($producto, $unidades);
?>
<?php while ($stmt->fetch()): ?>
    <p><?= "Producto $producto: $unidades unidades." ?></p>
<?php endwhile ?>
<?php
$stmt->close();
$conProyecto->close(); //cerramos la conexion