<?php
$host = "localhost";
$db = "proyecto";
$user = "gestor";
$pass = "secreto";
$dsn = "mysql:host=$host;dbname=$db";
try {
    $conProyecto = new PDO($dsn, $user, $pass);
    $conProyecto->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $registros = $conProyecto->exec('DELETE FROM stocks WHERE unidades=1');
} catch (PDOException $e) {
    die("Error en la conexión o la consulta: " . $e->getMessage());
}
$conProyecto = null;
?>
<p>Se han borrado <?= $registros ?> registros.</p>
