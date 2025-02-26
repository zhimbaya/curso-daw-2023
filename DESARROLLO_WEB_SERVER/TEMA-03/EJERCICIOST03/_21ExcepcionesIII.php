<?php

class cadenaException extends Exception {

    public function miMensajeError() {
        //mensaje de error
        $msgError = 'Error en la línea ' . $this->getLine() . ': <b>' . $this->getMessage() . '</b> no es un string' . '<br/>';
        return $msgError;
    }
}

class numericoException extends Exception {

    public function miMensajeError() {
        //mensaje de error
        $msgError = 'Error en la línea ' . $this->getLine() . ': <b>' . $this->getMessage() . '</b> no es un entero' . '<br/>';
        return $msgError;
    }
}

function checkTipo($nombre, $edad) {
    if (!is_string($nombre)) {
        throw new cadenaException($nombre);
    }
    if (!is_numeric($edad)) {
        throw new NumericoException($edad);
    } else {
        echo $nombre . " tiene la edad " . $edad . '<br/>';
    }
}

try {
    echo checkTipo("Sara", 25) . "\n";
    echo checkTipo(5, 10) . "\n";
} catch (cadenaException $e) {
    echo $e->miMensajeError();
} catch (numericoException $e) {
    echo $e->miMensajeError();
}

