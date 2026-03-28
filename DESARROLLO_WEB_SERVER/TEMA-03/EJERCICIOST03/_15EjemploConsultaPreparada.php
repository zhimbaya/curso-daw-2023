<?php

// Uso bindParam sustituyendo signos de interrogación y parámetros con nombre
$cod_producto = "TABLET";
$nombre_producto = "Tablet PC";
$consulta->bindParam(1, $cod_producto, PDO::PARAM_STR, 20);
$consulta->bindParam(2, $nombre_producto, PDO::PARAM_STR, 80);
$consulta->bindParam(':cod', $cod_producto, PDO::PARAM_STR, 20);
$consulta->bindParam(':nombre', $nombre_producto, PDO::PARAM_STR, 80);

//Uso bindValue sustituyendo signos de interrogación y parámetros con nombre
$cod_producto = "TABLET";
$nombre_producto = "Tablet PC";
$consulta->bindValue(1, $cod_producto, PDO::PARAM_STR, 20);
$consulta->bindValue(2, $nombre_producto, PDO::PARAM_STR, 80);
$consulta->bindValue(':cod', $cod_producto,  "TABLET");
$consulta->bindValue(':nombre', $nombre_producto, "Tablet PC");

$nombre="Monitores";
$codigo="MONI";
$stmt = $conProyecto->prepare('INSERT INTO familia (cod, nombre) VALUES (:cod, :nombre)');
$stmt->execute([ ':cod'=>$codigo, ':nombre'=>$nombre]);

