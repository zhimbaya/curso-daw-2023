<?php
//Plugins
//PHP Extension Pack, PHP Server.
//Configuración > php > settings.json > pegar ruta de php de xampp
//
/*
"phpserver.phpPath": "/Applications/XAMPP/xamppfiles/bin/php-8.2.4",
"phpserver.phpConfigPath": "/Applications/XAMPP/xamppfiles/etc/php.ini",
"php.validate.executablePath": "/Applications/XAMPP/xamppfiles/bin/php-8.2.4",
*/
//Array de nombres
$a = array ("Sara","Imanol","Dani","Antonio","David","Igor","Naroa","Christian","Joseba","Angel","Alex","Dumitru","Mikel","Ivan","Martin");

//Tomamos el valor del input procedente de la URL
$nombre = $_REQUEST["nombre"];
$sugerencia = "";

if($nombre !== ""){
    $nombre = strtolower($nombre);
    $long = strlen($nombre);
    foreach($a as $nom){
        if(stristr($nombre,substr($nom, 0, $long))){
            //si coincide la cadena pasada con los primeros caracteres de algún elemento del array
            if($sugerencia === ""){
                $sugerencia = $nom;
            }else{
                $sugerencia = "$sugerencia , $nom";
            }
        }
    }
}
if ($sugerencia === "") echo "NO hay sugerencias";
else echo $sugerencia;
//echo ($sugerencia === "") ? "NO hay sugerencias" : $sugerencia;
?>