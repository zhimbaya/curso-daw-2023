<?php

// Genera un array del 1 al 20 y le aplica la función para calcular sus cuadrados
print_r(array_map(fn($x) => $x * $x, range(1, 20))); 
echo '<br>';
// Genera un array del 1 al 20 y filtra el array para que queden solo lo pares
print_r(array_filter(range(1, 10), fn($x) => $x % 2 === 0)); 
echo '<br>';
// Ordena un número en base a la suma de sus dígitos. El operador <=> compara dos elementos 
// y devuelve 1, -1 o 0 dependiendo del resultado de la comparación
$orden = function ($x, $y) {
    return (array_reduce(str_split($x), fn($x, $y) => $x + $y, 0) <=> array_reduce(str_split($y), fn($x, $y) => $x + $y, 0));
}; 

// Genera un array del 1 al 20 y lo ordena según el criterio de ordenación definido por el programador   
$arrayNumeros = range(1, 10);
usort($arrayNumeros, $orden);
print_r($arrayNumeros); 

