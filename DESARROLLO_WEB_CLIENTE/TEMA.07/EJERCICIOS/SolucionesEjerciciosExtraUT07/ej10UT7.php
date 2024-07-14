<?php

$comunidades_autonomas = [
    "Andalucía" => [
        "Almería",
        "Cádiz",
        "Córdoba",
        "Granada",
        "Huelva",
        "Jaén",
        "Málaga",
        "Sevilla"
    ],
    "Aragón" => [
        "Huesca",
        "Teruel",
        "Zaragoza"
    ],
    "Principado de Asturias" => [
        "Asturias"
    ],
    "Islas Baleares" => [
        "Baleares"
    ],
    "Canarias" => [
        "Las Palmas",
        "Santa Cruz de Tenerife"
    ],
    "Cantabria" => [
        "Cantabria"
    ],
    "Castilla La Mancha" => [
        "Albacete",
        "Ciudad Real",
        "Cuenca",
        "Guadalajara",
        "Toledo"
    ],
    "Castilla y León" => [
        "Ávila",
        "Burgos",
        "León",
        "Palencia",
        "Salamanca",
        "Segovia",
        "Soria",
        "Valladolid",
        "Zamora"
    ],
    "Cataluña" => [
        "Barcelona",
        "Gerona",
        "Lérida",
        "Tarragona"
    ],
    "Comunidad Valenciana" => [
        "Alicante",
        "Castellón",
        "Valencia"
    ],
    "Extremadura" => [
        "Badajoz",
        "Cáceres"
    ],
    "Galicia" => [
        "La Coruña",
        "Lugo",
        "Orense",
        "Pontevedra"
    ],
    "La Rioja" => [
        "La Rioja"
    ],
    "Comunidad de Madrid" => [
        "Madrid"
    ],
    "Región de Murcia" => [
        "Región de Murcia"
    ],
    "Comunidad Foral de Navarra" => [
        "Navarra"
    ],
    "País Vasco" => [
        "Álava",
        "Guipúzcoa",
        "Vizcaya"
    ]
];

$comunidad_autonoma = filter_input(INPUT_GET, "comunidad_autonoma");
// Esta línea devuelve la respuesta como JSON (al hacer JSON.parse en JS se tiene un array)
//echo json_encode($comunidades_autonomas[$comunidad_autonoma]);

// Esta línea devuelve la respuesta como texto plano con cada provincia separada por comas (.split(",") en JS para tener un array)
echo implode(",", $comunidades_autonomas[$comunidad_autonoma]);