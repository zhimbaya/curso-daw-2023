<?php
$controlador = new mysqli_driver();
$controlador->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
try {
    $conProyecto = new mysqli('localhost', 'gestor', 'secreto', 'proyecto');
    $resultado = $conProyecto->query('SELECT producto, unidades FROM stocks WHERE unidades<2');
} catch (mysqli_sql_exception $e) {
    die("Error en la conexión o la consulta: " . $e->getMessage());
}
$stock = $resultado->fetch_array();  // Obtenemos el primer registro
$producto = $stock['producto'];  // O también $stock[0];
$unidades = $stock['unidades'];  // O también $stock[1];
?>
<p>Producto <?= "$producto : $unidades unidades." ?></p>
<?php
$conProyecto->close(); //cerramos la conexion