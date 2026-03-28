<?php

/*
 * Escribe una expresión PHP que calcule la edad de las personas de la agenda. 
 * La expresión utiliza las variable $diaNac, $mesNac, $anyoNac con los datos 
 * de la fecha de nacimiento de la persona y $diaHoy, $mesHoy y $anyoHoy con 
 * clos datos de la fecha de hoy. Debes programar, sin sentencias de control, 
 * una expresión que calcule la edad de la persona. Fíjate que la edad no se 
 * calcula restando los valores de los años ya que puede ser que la persona no 
 * haya cumplido todavía en el año en curso.F
 */

//$diaHoy = 3;
//$mesHoy = 11;
//$anyoHoy = 2024;
$diaHoy = date("d");
echo $diaHoy;
$mesHoy = date("m");
echo $mesHoy;
$anyoHoy = date("Y");
echo $anyoHoy;

$diaNac = 10;
$mesNac = 11;
$anyoNac = 1985;

function CalculaEdad($diaNac, $mesNac, $anyoNac, $diaHoy, $mesHoy, $anyoHoy) {
    return(($mesHoy < $mesNac) || ($mesHoy == $mesNac && $diaHoy < $diaNac) ? ($anyoHoy - $anyoNac) - 1 : $anyoHoy - $anyoNac );
}

echo "<br>";
echo 'La edad en años es: ' . CalculaEdad($diaNac, $mesNac, $anyoNac, $diaHoy, $mesHoy, $anyoHoy);

