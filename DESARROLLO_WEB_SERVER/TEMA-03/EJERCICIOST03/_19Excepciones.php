<?php

$dividendo = 100;
$divisor = 10;
try {
    if ($divisor == 0)
        throw new Exception("División por cero.");
    $resultado = $dividendo / $divisor;
    echo "El resultado es $resultado <br/>";
} catch (Exception $e) {
    echo "Se ha producido el siguiente error: " . $e->getMessage() . "<br/>";
} finally {
    echo "Esto se ejecuta siempre";
}
    

