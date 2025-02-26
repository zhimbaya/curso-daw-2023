<?php

function metodoA() {
    throw new Exception('error del metodo A');
}

function metodoB() {
    metodoA();
}

function metodoC() {
    try {
        metodoB();
    } catch (Exception $e) {
// Maneja el error producido en  el metodo A
    }
}

//////

class ExcepcionA extends Exception{}
 
class ExcepcionB extends ExceptionA{}
 
try {
    metodoQueLanzaExcepcionA();
 
} catch (ExceptionA $e) {
// manejador de excepcionA
 
} catch (ExceptionB $e) {
// manejador de excepcionB

} catch (Exception $e) {
// manejador de excepcion de alto nivel
 
}
