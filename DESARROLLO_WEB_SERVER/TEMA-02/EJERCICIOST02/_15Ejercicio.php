<?php

$a = 1;

function prueba() {
    // Dentro de la función no se tiene acceso a la variable $a anterior
    $b = $a; // Se mostraría una notificación porque se usa una variable no establecida previamente
    // Por tanto, la variable $a usada en la asignación anterior es una variable nueva
    //   que no tiene valor asignado (su valor es null)
    return $b;
}

var_dump(prueba());

echo '<br>';

$c = 1;

function prueba2() {
    global $c;
    $b = $c;
    // En este caso se le asigna a $b el valor 1
    return $b;
}

var_dump(prueba2());

echo '<br>';

$d = 23;

function prueba3() {
    $d = 50;

    echo $d . "<br>"; //mostrará el valor local de a, es decir 50
    echo $GLOBALS["d"]; //mostrará el valor global de a, es decir 23
}

prueba3();

echo '<br>';

function contador() {
    static $a = 0;
    $a++; // Cada vez que se ejecuta la función, se incrementa el valor de $a 
    return $a;
}

var_dump(contador());
var_dump(contador());
var_dump(contador());
var_dump(contador());

echo '<br>';

$cadena = "Hola mundo";
$saludo = function () use ($cadena) {
    echo $cadena;
};
$saludo();

echo '<br>';

$mensaje = "Hola mundo";
$saludos = function($mens) { 
    echo $mens;
};
$saludos($mensaje);

echo '<br>';

$cubo = fn($x) => pow($x,3); 
echo $cubo(4);

echo '<br>';

$y = 1; 
$suma1 = fn($x) => $x + $y; // Usando función de flecha con acceso al contexto padre
$suma2 = function ($x) use ($y) {  // Usando función anónima importando la variable 
    return $x + $y; 
}; 
echo $suma1(3), "</br>"; // Usamos la función flecha 
echo $suma2(6); // Usamos la función anónima



