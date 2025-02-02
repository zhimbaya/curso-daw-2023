<?php

//phpinfo();
// al ser un archivo que solo va a contener php no se cerrara el script

function saludar($nombre) {
    $saludo = "Hola, $nombre!";
    return $saludo;
}

$nombre = "Juan";
$mensaje = saludar($nombre);
echo $mensaje; // Esto imprimirá "Hola, Juan!"

echo '<br>';

$iva = true;
$precio = 10;
//precioConIva($precio);     // esta línea dará error, coméntala
if ($iva) {

    function precioConIva($precio) {
        $precioIva = $precio * 1.18;
        echo "El precio con IVA es " . $precioIva;
    }

}
precioConIva($precio, $iva);     // Aquí ya no da error

echo '<br>';

function precioConIva2($precio, $iva = 0.18) {
    return $precio * (1 + $iva);
}

$precio2 = 10;
$precioIva2 = precioConIva2($precio2); //al no especificar tomará el valor 0.18
echo "El precio con IVA es $precioIva2";

echo '<br>';

function precioConIva3($precio, $iva = 0.18) {
    return $precio * (1 + $iva);
}

$precio3 = 10;
$precioIva3 = precioConIva3($precio3, 0.23); //ahora $iva=0.23
echo "El precio con IVA es $precioIva3";

echo '<br>';

function precioConIva4(&$precio, $iva = 0.18) {
    return $precio *= (1 + $iva);
}

$precio4 = 10;
$precios2 = precioConIva4($precio4);
echo "El precio es  $precio4";

