<?php

// Funciones de cambio de base de decimal a base X y de base X a decimal

/**
 * Función que realiza el cambio de base de un número de base 10 a otra base (2-16)
 * 
 * @param int $numero Número expresado en base 10
 * @param int $base Base a la que se va a cambiar (2-16)
 * @return string Número expresado en la nueva base
 */
function dec2x(int $numero, int $base = 2): string {
    $conversion = '';
    do {
        $resto = $numero % $base;
        if ($resto > 9) {
            $resto = chr(ord('A') + $resto - 10);
        }
        $conversion = $resto . $conversion;
        $numero = intdiv($numero, $base);
    } while ($numero > 0);
    return $conversion;
}

/**
 * Función que realiza el cambio de base de un número en un base (2-16) a base 10
 * 
 * @param string $numero Número que se desea cambiar de base
 * @param int $base Base en la que se expresa dicho número (2-16)
 * @return string Número expresado en base 10
 */
function x2dec(string $numero, int $base = 2): int {
    $conversion = 0;
    for ($i = 0; $i < strlen($numero); $i++) {
        $digito = substr(strrev($numero), $i, 1);
        if (!is_numeric($digito)) {
            $digito = (ord($digito) - ord('A') + 10);
        }
        $conversion += (int) $digito * pow($base, $i);
    }
    return ($conversion);
}

/**
 * Función que realiza el cambio de base de un número de una base x a una base y  
 * 
 * @param string $numero
 * @param int $baseOrigen
 * @param int $baseDestino
 * @return string
 */
function x2y(string $num, int $baseOrigen, int $baseDestino): string {
    return dec2x(x2dec($num, $baseOrigen), $baseDestino);
}
