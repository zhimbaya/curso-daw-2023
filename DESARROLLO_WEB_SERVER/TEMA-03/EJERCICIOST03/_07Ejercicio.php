<?php

$conProyecto = new mysqli('localhost', 'gestor', 'secreto', 'proyecto');
/*
  $stmt = $conProyecto->stmt_init();
  try {
  $stmt->prepare(INSERT INTO familias (cod, nombre) VALUES ("TABLET", "Tablet PC")');
  $stmt->execute();
  } catch (mysqli_sql_exception $e) {
  die("Error en la preparación o ejecución: " . $e->getMessage());
  }
  $stmt->close();
  $conProyecto->close();
 */
$stmt = $conProyecto->stmt_init();
$stmt->prepare('INSERT INTO familias (cod, nombre) VALUES (?, ?)');
$cod_producto = "TABLET";
$nombre_producto = "Tablet PC";
$stmt->bind_param('ss', $cod_producto, $nombre_producto);
$stmt->execute();
$stmt->close();
$conProyecto->close();

