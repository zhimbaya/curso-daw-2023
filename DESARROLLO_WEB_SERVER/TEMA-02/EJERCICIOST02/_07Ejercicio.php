<?php

$mod1DAW = [
    "Programación",
    "Bases de datos",
    "Lenguaje de Marcas",
    "Entorno de Desarrollo",
    "Sistemas Informáticos",
    "Formación y Orientación Laboral"];

$mod1DAWAcronimo = [
    "PR" => "Programación", 
    "BD" => "Bases de datos",
    "LM" => "Lenguaje de Marcas",
    "ED" => "Entorno de Desarrollo",
    "SSII" => "Sistemas Informáticos",
    "FOL" => "Formación y Orientación Laboral"];

var_dump(array_key_exists("ED", $mod1DAWAcronimo)); // bool (true) 
echo '<br>';
var_dump(array_keys($mod1DAWAcronimo)); // array(6) { [0]=> string(2) "PR" [1]=> string(2) "BD" [2]=> string(2) "LM" [3]=> string(2) "ED" [4]=> string(4) "SSII" [5]=> string(3) "FOL" } 
echo '<br>';
var_dump(array_product([2, 3, 5])); // int (30) 
echo '<br>';
var_dump(array_sum([2, 3, 5])); // int(10) 
echo '<br>';
var_dump(array_slice($mod1DAW, 3, 2)); // array(2) { [0]=> string(21) "Entorno de Desarrollo" [1]=> string(22) "Sistemas Informáticos" }
echo '<br>';
var_dump(array_splice($mod1DAW, 2, 3, ["Empresa e Iniciativa Emprendedora"])); // array(3) { [0]=> string(18) "Lenguaje de Marcas" [1]=> string(21) "Entorno de Desarrollo" [2]=> string(22) "Sistemas Informáticos" } 
echo '<br>';
var_dump($mod1DAW); // array(4) { [0]=> string(13) "Programación" [1]=> string(14) "Bases de datos" [2]=> string(33) "Empresa e Iniciativa Emprendedora" [3]=> string(33) "Formación y Orientación Laboral" } 
echo '<br>';
var_dump(array_shift($mod1DAWAcronimo)); // string(13) "Programación" 
echo '<br>';
var_dump($mod1DAWAcronimo); // array(5) { ["BD"]=> string(14) "Bases de datos" ["LM"]=> string(18) "Lenguaje de Marcas" ["ED"]=> string(21) "Entorno de Desarrollo" ["SSII"]=> string(22) "Sistemas Informáticos" ["FOL"]=> string(33) "Formación y Orientación Laboral" } 
echo '<br>';
var_dump(array_unique([2, 2, 3, 4, 5, 5, 6, 6, 6])); // array(5) { [0]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) [6]=> int(6) } 
echo '<br>';
var_dump(array_values([2, 2, 3, 6 => 4, 5, 5, 10 => 6, 6, 6])); // array(9) { [0]=> int(2) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) [5]=> int(5) [6]=> int(6) [7]=> int(6) [8]=> int(6) }
echo '<br>';
var_dump(array_fill(0, 5, "hola")); // array(5) { [0]=> string(4) "hola" [1]=> string(4) "hola" [2]=> string(4) "hola" [3]=> string(4) "hola" [4]=> string(4) "hola" } 
echo '<br>';
var_dump(count([2, 2, 3, 4, 5, 5, 6, 6, 6])); // int(9) 
echo '<br>';
var_dump(in_array(4, [2, 2, 3, 4, 5, 5, 6, 6, 6])); // bool(true) 
echo '<br>';
var_dump(array_rand($mod1DAWAcronimo)); //valor aleatorio string(4) "SSII" 
echo '<br>';
var_dump(implode(":", ["uno", "dos", "tres", "cuatro", "cinco", "seis"])); // string(30) "uno:dos:tres:cuatro:cinco:seis"  
echo '<br>';
var_dump(explode("|", "uno|dos|tres|cuatro|cinco|seis")); // array(6) { [0]=> string(3) "uno" [1]=> string(3) "dos" [2]=> string(4) "tres" [3]=> string(6) "cuatro" [4]=> string(5) "cinco" [5]=> string(4) "seis" }
