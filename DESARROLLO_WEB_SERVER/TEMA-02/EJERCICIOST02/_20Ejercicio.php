<?php

// Abrir un archivo en modo lectura
$archivo = fopen("ejemplo.txt", "r");

// Realizar operaciones en el archivo...
// Escribir en el archivo
if (file_put_contents($archivo, "Hola, universo!\n") === false) {
    echo "Error al escribir en el archivo.";
} else {
    echo "Escritura exitosa.";
}

// // Leer el archivo línea por línea
while (!feof($archivo)) {
    $linea = fgets($archivo);
    echo $linea . "<br>";
}
$contenido = file_get_contents("ejemplo.txt");
echo $contenido;
// Cerrar el archivo
fclose($archivo);

