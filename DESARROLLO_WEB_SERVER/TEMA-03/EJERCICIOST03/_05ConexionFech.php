<?php
$controlador = new mysqli_driver();
$controlador->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
try {
    $conProyecto = new mysqli('localhost', 'gestor', 'secreto', 'proyecto');
    $resultado = $conProyecto->query('SELECT producto, unidades FROM stocks WHERE unidades<2');
} catch (mysqli_sql_exception $e) {
    die("Error en la conexión o la consulta: " . $e->getMessage());
}
?>
<?php while ($stock = $resultado->fetch_object()): ?>
    <p><?= "Producto {$stock->producto}: {$stock->unidades} unidades." ?></p>
<?php endwhile ?>
<?php
$conProyecto->close(); //cerramos la conexion