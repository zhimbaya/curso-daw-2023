<?php

$fechaHoraActual = new DateTime();
//Se crear un objeto con la fecha y hora del sistema
var_dump($fechaHoraActual);

echo"<br>";
$dateTime = new DateTime('2015-01-01 12:30:12');
var_dump($dateTime);

echo"<br>";
$fechaHoraAyer = new DateTime('yesterday');
// Se crea un objeto con la fecha y hora de
var_dump($fechaHoraAyer);

echo"<br>";
$cuatroDiasDespues = new DateTime('+ 4 days');
// Se crea un objeto con la fecha y hora
var_dump($cuatroDiasDespues);

echo"<br>";
$lunesPasado = new DateTime('last monday');
// Se crea un objeto con la fecha y hora de
var_dump($lunesPasado);

echo"<br>";
$fechaHoraAyerNewYork = new DateTime('yesterday noon', new DateTimeZone('America/New_York'));
var_dump($fechaHoraAyerNewYork);

echo"<br>";
$ahora = new DateTime();
echo $ahora->format('Y-m-d'), "<br>"; // 2022-11-01 
echo $ahora->format('jS F Y'), "<br>"; // 1st November 2022 
echo $ahora->format('ga jS M Y'), "<br>"; // 7pm 1st Nov 2022 
echo $ahora->format('Y/m/d s:i:H'), "<br>"; // 2022/11/01 33:48:19

echo '<br>';
$hoy = new DateTime('today');
$ayer = new DateTime('yesterday');
var_dump($hoy > $ayer); // bool(true) 
var_dump($hoy < $ayer); // bool(false) 
var_dump($hoy == $ayer); // bool(false) 

echo '<br>';

$hoy1 = new DateTime('today');
$ayer1 = new DateTime('yesterday');
$interval = $hoy1->diff($ayer1);
echo $interval->format('Hace %d día');

echo '<br>';

$hoy2 = new DateTime('today');
echo $hoy2->format('Y-m-d'), "</br>"; // 2022-11-01 
$hoy2->add(new DateInterval('P2D'));
echo $hoy2->format('Y-m-d'), "</br>"; // 2022-11-03 
$hoy2->sub(new DateInterval('P2D'));
echo $hoy2->format('Y-m-d'), "</br>"; // 2022-11-01

echo '<br>';

$hoy3 = new DateTime('today');
echo $hoy3->format('Y-m-d'), "<br>"; // 2022-11-01 
$hoy3->modify('-2 days');
echo $hoy3->format('Y-m-d'), "<br>"; // 2022-10-30

echo '<br>';

$comienzo = new DateTime('2022-08-01');
$fin = new DateTime('2022-08-31');
$intervalo = new DateInterval('P2D');
$periodo = new DatePeriod($comienzo, $intervalo, $fin);
foreach ($periodo as $fecha) { // Devuelve fechas desde la fecha inicial cada do 
    echo $fecha->format("Ymd") . "<br>";
}

echo '<br>-----';

setlocale(LC_ALL, 'es-ES.UTF-8'); 
date_default_timezone_set('Europe/Madrid'); 
$ahora3 = new DateTime(); 
$fecha3 = strftime("Hoy es %A, %d de %B de %Y y son las %H:%M:%S", $ahora3);
echo $fecha3;

$timestamp = strtotime('Mon, 12 Dec 2011 21:17:52 +0000');
$dt = new DateTime('@' . $timestamp);
echo $dt;