<?php

$a[] = "juan";
$a[] = "marta";
$a[] = "pedro";
$a[] = "andrea";
$a[] = "miguel";
$a[] = "natalia";
$a[] = "maria";
$a[] = "eva";

sleep(10);
$nombre = $_REQUEST["nombre"];
$respuesta="NOK";

if ($nombre !== "") {
  
$nombre = strtolower($nombre);
  foreach($a as $name) {
    if (!strcmp($nombre, $name)) {
        $respuesta="OK";
        break;
    } else {
        $respuesta="NOK";       
      }
  }

}

echo $respuesta;
?>
