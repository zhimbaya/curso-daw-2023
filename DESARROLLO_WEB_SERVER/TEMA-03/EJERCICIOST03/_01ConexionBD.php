<?php

// utilizando constructores y métodos de la programación orientada a objetos
// servidor podría ser localhost, usuario podría ser gestor, contraseña podría 
// ser secreto y base_de_datos podría ser proyecto
// 
//$conexion = new mysqli('servidor', 'usuario', 'contraseña', 'base_de_datos');
$conexion = new mysqli('localhost', 'gestor', 'secreto', 'proyecto');
print $conexion->server_info;
echo '<br>';

// utilizando llamadas a funciones

$conexion = mysqli_connect('localhost', 'root', '', 'proyecto');
print mysqli_get_server_info($conexion);

$conProyecto = new mysqli('localhost', 'gestor', 'secreto', 'proyecto');
if ($conProyecto->connect_error) {
    die('Error de Conexión (' . $conProyecto->connect_errno . ') ' . $conProyecto->connect_error);
    //die() detiene la ejecución del script php
}

$controlador = new mysqli_driver();
$controlador->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
try {
    $conProyecto = new mysqli('localhost', 'gestor', 'secreto', 'proyecto');
} catch (mysqli_sql_exception $e) {
    die ("Error en la conexión a la base de datos: " . $e->getMessage());
}

$conProyecto->select_db('otra_bd');

