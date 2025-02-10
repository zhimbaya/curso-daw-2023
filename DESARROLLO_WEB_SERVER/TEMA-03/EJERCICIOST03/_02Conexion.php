<?php
$controlador = new mysqli_driver();
$controlador->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
$conProyecto = new mysqli('localhost', 'gestor', 'secreto', 'proyecto');
try {
    $conProyecto->query("DELETE FROM productos WHERE nombre_corto='TSSD16GBC10J'");
} catch (mysqli_sql_exception $e) {
    echo "Error en la consulta: " . $e->getMessage();
}
?>
<p>"Se han borrado <?= $conProyecto->affected_rows ?> registros."</p>
<?php
$conProyecto->close();
