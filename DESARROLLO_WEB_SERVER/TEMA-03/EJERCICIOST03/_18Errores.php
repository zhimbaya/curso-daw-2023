<?php
// Función de manje de errores de usuario
function miManejadorErrores($errno, $errstr, $errfile, $errline) {
    echo "<b>Mi ERROR</b> [$errno] $errstr<br>\n";
    echo "Error en la línea $errline en el fichero $errfile<br>\n";
}

//Establece el manejador de usuario
set_error_handler("miManejadorErrores");

$test = 100;

//triggering user-defined error handler function
if ($test == 100) {
    trigger_error("Se ha generado un error de usuario", E_USER_ERROR);
}