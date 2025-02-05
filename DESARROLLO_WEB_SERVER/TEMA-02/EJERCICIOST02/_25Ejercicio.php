<?php

// Saneamiento de cadena con caracteres HTML
var_dump(filter_var('<p class="header">Hola</p>', FILTER_UNSAFE_RAW));  //"Hola"
echo '<br>';
// Ver el código fuente de la página "&#60;p class=&#34;header&#34;&#62;Hola&#60;/p&#62;" entidad númerica
var_dump(filter_var('<h1 class="header">Hola</h1>', FILTER_SANITIZE_SPECIAL_CHARS)); 
echo '<br>';
var_dump(filter_var('-34.S67', FILTER_SANITIZE_NUMBER_INT)); // -3467
echo '<br>';
var_dump(filter_var('pedro/garcia@dom . com', FILTER_SANITIZE_EMAIL)); //"pedrogarcia@dom.com";
echo '<br>';

var_dump(filter_var("yes", FILTER_VALIDATE_BOOLEAN)); // true
echo '<br>';
var_dump(filter_var(34.6, FILTER_VALIDATE_INT)); // false
echo '<br>';
// Devuelve el valor transformado a float 134.6 
var_dump(filter_var(134.6, FILTER_VALIDATE_FLOAT, ["options" => ["min_range" => 100]])); 
echo '<br>';
var_dump(filter_var("john@dominio.com", FILTER_VALIDATE_EMAIL)); // "john@dominio.com"
echo '<br>';
var_dump(filter_var("Juan Antonio Rodríguez", FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => "/^[a-z A-ZáéíóúÁÉÍÓÚ]{3,25}$/"]])); // Juan Antonio Rodríguez

