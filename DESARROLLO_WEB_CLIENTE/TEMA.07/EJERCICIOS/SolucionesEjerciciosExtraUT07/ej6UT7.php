<?php

$a[] = "juan luis";
$a[] = "marta";
$a[] = "pedro";
$a[] = "andrea";
$a[] = "miguel";
$a[] = "natalia";
$a[] = "maria";
$a[] = "eva";
$a[] = "diego";

$nombre = $_REQUEST["nombre"];
$respuesta = "NOK";

if ($nombre !== "") {

  $nombre = strtolower($nombre);
  foreach ($a as $name) {
    if (!strcmp($nombre, $name)) {
      $respuesta = "OK";
      break;
    } else {
      $respuesta = "NOK";
    }
  }
}
echo $respuesta;
?>