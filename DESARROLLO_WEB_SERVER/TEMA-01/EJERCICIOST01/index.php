<?php
var_dump(1234); // número decimal int(1234)
var_dump(-123); // un número negativo int(-123)
var_dump(0123); // número octal (equivale a 83 decimal) int(83)
var_dump(0x1A); // número hexadecimal (equivale a 26 decimal) int(26)
var_dump(0b11111111); // número binario (equivale al 255 decimal) int(255)

var_dump(1.234); // float(1.234)
var_dump(1.2e3); // float(1200)
var_dump(7E-10); // float(7.0E-10)

var_dump("incluyo algún \t tabulador y algún \n retorno de carro");

echo '<br>';
var_dump(true); // bool(true)
var_dump(false); // bool(false)

echo '<br>';
define('MIN_VALUE', 0.5);
define('CONTRASEÑA', 'PASSWORD');
var_dump(MIN_VALUE); // float(0.5)
var_dump(CONTRASEÑA); // string(8) "PASSWORD"

echo '<br>';
$mi_variable = 7;
var_dump($mi_variable);

$mi_entero = 3;
$mi_real = 2.3;
$resultado = $mi_entero + $mi_real;
var_dump($resultado); // float (5.3)
// La variable $resultado es de tipo real

$mi_entero2 = 3;$mi_real2 = 2.3;
$resultado2 = $mi_entero2 + (int) $mi_real2;
var_dump($resultado2); // int(5)
// La variable $mi_real se convierte a entero (valor 2) antes de sumarse.
// La variable $resultado es de tipo entero (valor 5)

echo '<br>';
$var=23;
var_dump(is_int($var)); // bool(true)
var_dump(is_int(23)); // bool(true)
var_dump(is_int('23')); // bool(false)

$mi_variable2 = 7; // Operador de asignación =
$A = $b + $c; // Operador de suma + y asignación =
$res = $uno && $otro; // Operador and lógico y asignación =
$valor++; // Operador de incremento ++ y asignación =
$compara = 5 < 6; // Operador de comparación < y asignación =


echo '<br>';
$a = 5;
$b = ++$a;
// Antes se le suma uno a $a (pasa a tener valor 6)
// y después se asigna a $b (que también acaba con valor 6).
$a1 = 5;
$b2 = $a1++;
// Antes se asigna a $b el valor de $a (5).
// y después se le suma uno a $a (pasa a tener valor 6)

echo '<br>';
$x = 0;
var_dump($x == false); // bool(true) ya que false se convierte a 0
var_dump($x === false); // bool (false) debe coincidir el valor y el tipo

echo '<br>';
$x2 = 5;
$y2 = 8;
$resultado3 = ($x2 > $y2) ? "x mayor" : "y mayor o igual";
var_dump($resultado3);

$parametro = $valor ?? 6; // Si $valor no está establecido se usa el valor 6 ya que su 
var_dump($parametro);

$a3=8;
$x3=10;
$y3=8;
$z3=5;
$resultado4 = match ($a3) {
$x3 => "Valor igual a X",
$y3 => "Valor igual a Y",
'8.0' => "Esta no es una coincidencia exacta",
8.0 => "Valor devuelto 8",
default => "No lo encontré",
};
var_dump($resultado4);


echo '<br>';
echo '<br>';
var_dump(round(12.6)); // float(13)
var_dump(round(12.3)); // float(12)
var_dump(round(-12.6)); // float(-13)
var_dump(round(-12.3)); // float(-12)
var_dump(round(12.6574, 2)); // float(12.66)
var_dump(floor(12.6)); // float(12)
var_dump(floor(12.3)); // float(12)
var_dump(ceil(12.6)); // float(13)
var_dump(ceil(-12.6)); // float(-12)
var_dump(pow(2, 3)); // int(8)
var_dump(sqrt(25)); // float(5)
var_dump(max(22, 40, 28.1, 17.7)); // int(40)
var_dump(min(12, 4, 26.1, 18.7)); // int(4)
var_dump(mt_rand(1, 6)); // int(4)
var_dump(number_format(34534556.34544, 2)); //string(13) "34,534,556.35"
var_dump(number_format(123222343, 0, ",", ".")); // string(11) "123.222.343"
var_dump(number_format(345345345347.789, 2, ",", ".")); // string(18) "345.345.345.347,"

echo '<br>';
echo '<br>';
var_dump(ltrim(" HOLA ")); // string(7) "HOLA "
var_dump(str_contains("HOLA amigo", "HOLA")); // bool(true)
var_dump(str_repeat("HOLA", 3)); // string(12) "HOLAHOLAHOLA"
var_dump(str_replace("HOLA", "ADIOS", "HOLA amigo")); // string(11) "ADIOS amigo"
var_dump(strcmp("HOLA", "HOLA")); // int(0)
var_dump(strpos("HOLA amigo", "ami")); // int(5)
var_dump(strlen("HOLA amigo")); // int(10)
var_dump(strtolower("HOLA")); // string(4) "hola"
var_dump(substr("HOLA amigo", 1, 3)); // string(4) "OLA"


echo '<br>';
echo '<br>';
var_dump($a = $b = $c = 10); // int(10)
var_dump($a); // int(10)
var_dump($b); // int(10)
var_dump($c); // int(10)

echo '<br>';
echo '<br>';
var_dump(false and 1/0); // bool(false)
var_dump(true || 1/0); // bool(true)
//var_dump(1/0 || true); // error division por cero

echo '<br>';
echo '<br>';
$x4 = 10;
$y4 = 5;
$path = false;
var_dump(($x4 > $y4) ? "X es mayor que Y" : 1/0); // string(16) "X es mayor que Y"
var_dump($path ?: '/'); // string(1) "/" Si $path tuviera un valor distinto de false 

echo '<br>';
echo '<br>';
$path2 = null;
var_dump($path2 ?? '/'); // string(1) "/" En este caso se comprueba si el valor es nulo


echo '<br>';
echo '<br>';
$nota = 15;
var_dump(match ($nota) {
1, 2 => "Muy deficiente",
3, 4 => "Insuficiente",
5 => "Suficiente",
6 => "Bien",
7, 8 => "Notable",
9, 10 => "Sobresaliente",
default => "Nota incorrecta",
}); // string(10) "Suficiente". Se puede añadir una clausula default por si el valor 

