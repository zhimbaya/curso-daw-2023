<?php
echo 'Bucle While<br>';
$a = 1;
while ($a < 8) {
    $a += 3;
}
echo $a; // el valor obtenido es 10

echo '<br>Bucle do-while<br>';

$a1 = 5;
do {
    $a1 -= 3;
} while ($a1 > 10);
print $a1; // el bucle se ejecuta una sola vez, con lo que el valor obtenido es 2

echo '<br>Bucle for<br>';
for ($a = 5; $a < 10; $a += 3) {
    print $a; // Se muestran los valores 5 y 8 
    print "<br />";
} 


    