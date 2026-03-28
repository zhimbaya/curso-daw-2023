<?php

$provincias_array = [
    "Álava",
    "Albacete",
    "Alicante",
    "Almería",
    "Asturias",
    "Ávila",
    "Badajoz",
    "Barcelona",
    "Burgos",
    "Cáceres",
    "Cádiz",
    "Cantabria",
    "Castellón",
    "Ciudad Real",
    "Córdoba",
    "La Coruña",
    "Cuenca",
    "Gerona",
    "Granada",
    "Guadalajara",
    "Guipúzcoa",
    "Huelva",
    "Huesca",
    "Islas Baleares",
    "Jaén",
    "León",
    "Lérida",
    "Lugo",
    "Madrid",
    "Málaga",
    "Murcia",
    "Navarra",
    "Orense",
    "Palencia",
    "Las Palmas",
    "Pontevedra",
    "La Rioja",
    "Salamanca",
    "Segovia",
    "Sevilla",
    "Soria",
    "Tarragona",
    "Santa Cruz de Tenerife",
    "Teruel",
    "Toledo",
    "Valencia",
    "Valladolid",
    "Vizcaya",
    "Zamora",
    "Zaragoza"
];

function quitar_tildes($palabra) {
    $vocales_tildes = ["á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú"];
    $vocales = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];

    return str_replace($vocales_tildes, $vocales, $palabra);
}

$texto_introducido = filter_input(INPUT_GET, "provincia");
$texto_introducido = strtolower(quitar_tildes($texto_introducido));

if ($texto_introducido === "") {
    echo("Ninguna provincia encontrada");
    exit();
}

function filtrar_provincias($provincia) {
    global $texto_introducido;

    return preg_match("/^$texto_introducido/", strtolower(quitar_tildes($provincia)));
}

$provincias_filtrado = array_filter($provincias_array, "filtrar_provincias");

if (count($provincias_filtrado) > 0) {
    echo(implode(", ", $provincias_filtrado));
}
else {
    echo("Ninguna provincia encontrada");
}