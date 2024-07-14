<?php
    //Para evitar que los warning salgan en la pantalla y ses traten como texto JSON.
    error_reporting(0);
    $objeto = new stdClass();
    $objeto->nombre = "Ada";
    $objeto->nacimiento = 1815;
    $objeto->pais = "Reino Unido";

    $miJSON = json_encode($objeto);
    echo $miJSON;
?>