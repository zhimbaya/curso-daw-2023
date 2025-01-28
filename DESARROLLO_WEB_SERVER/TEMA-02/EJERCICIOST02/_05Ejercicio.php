<?php

// array numérico 
$mod1DAW = array("Programación",
    "Bases de Datos",
    "Lenguaje de Marcas y Sistemas de Gestión de Información",
    "Entornos de Desarrollo",
    "Sistemas Informáticos",
    "Formación y Orientación Laboral");
print_r($mod1DAW);

echo '<br>---------<br>';

// array explícito
$mod1DAWbis = array("Programación",
    "Bases de Datos",
    "Lenguaje de Marcas y Sistemas de Gestión de Información",
    10 => "Entornos de Desarrollo",
    "Sistemas Informáticos",
    15 => "Formación y Orientación Laboral");
print_r($mod1DAWbis);

echo '<br>---------<br>';

// array asociativo 
$mod1DAWAcronimo = array("PR" => "Programación",
    "BD" => "Bases de datos",
    "LM" => "Lenguaje de Marcas",
    "ED" => "Entorno de Desarrollo",
    "SSII" => "Sistemas Informáticos",
    "FOL" => "Formación y Orientación Laboral");
print_r($mod1DAWAcronimo);

echo '<br>---------<br>';

// array numérico
$mod1DAW2 = [
    "Programación",
    "Bases de Datos",
    "Lenguaje de Marcas y Sistemas de Gestión de Información",
    "Entornos de Desarrollo",
    "Sistemas Informáticos",
    "Formación y Orientación Laboral"
];
var_dump($mod1DAW2);

echo '<br>---------<br>';

// array asociativo
$mod1DAWAcronimo2 = [
    "PR" => "Programación",
    "BD" => "Bases de datos",
    "LM" => "Lenguaje de Marcas",
    "ED" => "Entorno de Desarrollo",
    "SSII" => "Sistemas Informáticos",
    "FOL" => "Formación y Orientación Laboral"
];
var_dump($mod1DAWAcronimo2);

echo '<br>---------<br>';

echo "$mod1DAW[3]";
echo '<br>---------<br>';
echo "$mod1DAWAcronimo[PR]";
echo $mod1DAWAcronimo["PR"];

echo '<br>---------<br>';

$DAW = [
    "1DAW" => ["PR" => "Programación", "BD" => "Bases de datos", "LM" => "Lenguaje de Marcas", "ED" => "Entorno de Desarrollo", "SSII" => "Sistemas Informáticos", "FOL" => "Formación y Orientación Laboral"],
    "2DAW" => ["DAW" => "Despliegue de Aplicaciones Web", "DWES" => "Desarrollo Web en Entorno Servidor", "DWEC" => "Desarrollo Web en Entorno Cliente", "DIW" => "Diseño de Interfaces Web", "EIE" => "Empresa e Iniciativa Emprendedora", "ING" => "Inglés"]
];
print_r($DAW);
echo '<br>---------<br>';
echo $DAW ["2DAW"] ["DWES"];

echo '<br>---------<br>';

// array numérico
$mod1DAW [0] = "Programación";
$mod1DAW [1] = "Bases de datos";
$mod1DAW [2] = "Lenguaje de Marcas y Sistemas de Gestión de Información";
$mod1DAW [3] = "Entornos de Desarrollo";
$mod1DAW [4] = "Sistemas Informáticos";
$mod1DAW [5] = "Formación y Orientación Laboral";
print_r($mod1DAW);

// array asociativo
$mod1DAWAcronimo ["PR"] = "Programación";
$mod1DAWAcronimo ["BD"] = "Bases de datos";
$mod1DAWAcronimo ["LM"] = "Lenguaje de Marcas y Sistemas de Gestión de Información";
$mod1DAWAcronimo ["ED"] = "Entornos de Desarrollo";
$mod1DAWAcronimo ["SSII"] = "Sistemas Informáticos";
$mod1DAWAcronimo ["FOL"] = "Formación y Orientación Laboral";
print_r($mod1DAWAcronimo);

// array numérico
$mod1DAW [] = "Programación";
$mod1DAW [] = "Bases de datos";
$mod1DAW [] = "Lenguaje de Marcas y Sistemas de Gestión de Información";
$mod1DAW [] = "Entornos de Desarrollo";
$mod1DAW [] = "Sistemas Informáticos";
$mod1DAW [] = "Formación y Orientación Laboral";
print_r($mod1DAW);

echo '<br>---------<br>';

$mod1DAWAcronim2 = ["PR" => "Programación",
    "BD" => "Bases de datos",
    "LM" => "Lenguaje de Marcas",
    "ED" => "Entorno de Desarrollo",
    "SSII" => "Sistemas Informáticos",
    "FOL" => "Formación y Orientación Laboral"];

foreach ($mod1DAWAcronim2 as $clave => $modulo) {
    echo "Módulo: $modulo", "</br>";
}

foreach ($mod1DAWAcronim2 as $clave2 => $modulo2) {
    echo "$clave2 : $modulo2","</br>";
}

// NO da ningún problema.
$a[0] = 0;
$a[1] = "uno";
$a["tres"] = 3;
$a[] = 8;

print_r($a);