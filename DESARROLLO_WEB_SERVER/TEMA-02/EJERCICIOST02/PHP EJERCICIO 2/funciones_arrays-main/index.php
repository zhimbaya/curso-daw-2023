<!DOCTYPE html>
<html>
    <head>
        <title>Pogramación con funciones de array</title>
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h2>Programación con librería Datetime</h2>
        <table>
            <tr>
                <td><p>Crea un array indexado $DAW1 con los nombres de los módulos del primer curso del ciclo de DAW</p>
                    <pre>$DAW1 = array('Bases de Datos', 'Entornos de Desarrollo', 'Formación y Orientación Laboral', 'Lenguaje de Marcas y Sistemas de Gestión de Información',
        'Programación', 'Sistemas Informáticos');</pre></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Elimina el elemento correspondiente al índice 3 de $DAW1 y muestra el nuevo contenido. Reorganiza el array para que no se queden huecos en los índices.</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Añade de nuevo el elemento eliminado y muestra el nuevo contenido</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Crea un nuevo array $primerosModulosDAW1 con los tres primeros módulos de $DAW1. Muestra ambos arrays</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Elimina los dos últimos módulos del array $DAW1 y al mismo tiempo crea un nuevo array $ultimosmodulosDAW1 con dichos módulos. Muestra ambos arrays</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Añade estos elementos de nuevo al array $DAW1. Muestra el nuevo contenido de $DAW1</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Crea un array indexado con los nombres de los módulos de segundo curso del ciclo DAW. Muestra el array de segundo de DAW</p>
                    <pre>$DAW2 = ['Desarrollo Web en Entorno Cliente', 'Desarrollo Web en Entorno Servidor', 'Despliegue de Aplicaciones', 'Diseño de interfaces web',
        'Empresa e Iniciativa Emprendedora', 'Inglés Técnico', 'Proyecto de Desarrollo de Aplicaciones Web', 'Formación en Centros de Trabajo'];</pre></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Crea un array $DAW que contenga la unión de los módulos de primero $DAW1 y segundo $DAW2. Muestra el array de DAW. Muestra el array combinado</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Crea un array indexado $DAM con los módulos del ciclo de DAM. Muestra el array $DAM</p>
                    <pre>$DAM = ['Bases de Datos', 'Entornos de Desarrollo', 'Formación y Orientación Laboral', 'Lenguaje de Marcas y Sistemas de Gestión de Información',
        'Programación', 'Sistemas Informáticos', 'Acceso a Datos', 'Desarrollo de Interfaces', 'Programación de Servicios y Procesos',
        'Sistemas de Gestión Empresarial', 'Empresa e Iniciativa Emprendedora', 'Inglés Técnico', 'Proyecto de Desarrollo de Aplicaciones Multiplataforma', 'Formación en Centros de Trabajo'];</pre></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Crea un array $DAWDAM con la unión de los módulos de DAW y DAM sin duplicados. Muestra el array completo $DAWDAM</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Comprueba que el módulo 'Desarrollo Web en Entorno Servidor' se encuentre en el array $DAWDAM</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Crea un array $DAM2 con los módulos diferencia entre los elementos de DAW1 y DAWDAM. Muestra el array diferencia</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Crea un array $DAMyDAW con los módulos comunes de $DAW y $DAM</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Muestra un módulo obtenido al azar del array $DAWDAM</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Crea una cadena con todos los nombres de los módulos de primero DAW separados por '-'</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Ordena los módulos del array $DAW por orden alfabético descendente. Muestra el array ordenado</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Ordena los módulos del array $DAM por orden alfabético ascendente sin cambiar los índices. Muestra el array ordenado</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Crea un array asociativo $DAWAsoc de los nombres de módulos de DAW cuyos índices son las abreviaturas de los mismos. Muestra el array DAWAsoc</p>
                    <pre>$DAWAsoc = ['BD' => 'Bases de Datos', 'ED' => 'Entornos de Desarrollo', 'FOL' => 'Formación y Orientación Laboral',
        'LMSGI' => 'Lenguaje de Marcas y Sistemas de Gestión de Información', 'P' => 'Programación',
        'SI' => 'Sistemas Informáticos', 'DWEC' => 'Desarrollo Web en Entorno Cliente', 'DWES' => 'Desarrollo Web en Entorno Servidor',
        'DAW' => 'Despliegue de Aplicaciones', 'DIW' => 'Diseño de interfaces web',
        'EIE' => 'Empresa e Iniciativa Emprendedora', 'IT' => 'Inglés Técnico', 'PR' => 'Proyecto de Desarrollo de Aplicaciones Web', 'FCT' => 'Formación en Centros de Trabajo'];</pre></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Crea un array $DAWAbrev con las abreviaturas de los módulos de DAW a partir del array $DAWAsoc. Muestra el array $DAWAbrev</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Comprueba que alguna de las abreviaturas sea 'BD' en el array $DAWAsoc</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Recorre el array $DAWAsoc mostrando una lista con las abreviaturas y los nombres de los módulos</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Ordena el array asociativo $DAWAsoc por orden alfabético ascendente de sus claves. Muestra el array $DAWAsoc ordenado</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Crea un array bidimensional indexado para cada curso y asociativo para cada módulo cuya clave sea la abreviatura del módulo y los datos sean el nombre y el número de horas del módulo. Muestra el array DAWBi</p>
                    <pre>$DAWBi = ['BD' => ['Bases de Datos', 205], 'ED' => ['Entornos de Desarrollo', 90], 'FOL' => ['Formación y Orientación Laboral', 90],
        'LMSGI' => ['Lenguaje de Marcas y Sistemas de Gestión de Información', 140], 'P' => ['Programación', 270],
        'SI' => ['Sistemas Informáticos', 205], 'DWEC' => ['Desarrollo Web en Entorno Cliente', 115], 'DWES' => ['Desarrollo Web en Entorno Servidor', 180],
        'DAW' => ['Despliegue de Aplicaciones', 85], 'DIW' => ['Diseño de interfaces web', 115],
        'EIE' => ['Empresa e Iniciativa Emprendedora', 65], 'IT' => ['Inglés Técnico', 40], 'PR' => ['Proyecto de Desarrollo de Aplicaciones Web', 30], 'FCT' => ['Formación en Centros de Trabajo', 370]];</pre>
                </td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Realiza un programa que muestre las abreviaturas de los módulos del array $DAWBi junto con su duración</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Muestra la duración del módulo de Desarrollo Web en Entorno Servidor (DWES) contenido en el array $DAWBi</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Ordena el array bidimensional en orden ascendente de duración y en caso de empate descendente alfabéticamente con la función array_multisort</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Crea un array tridimensional indexado $DAWTri para cada curso y asociativo para cada módulo cuya clave sea la abreviatura del módulo y los datos sean el nombre y el número de horas del módulo. Muestra el array DAWTri</p>
                    <pre>$DAWTri = [['BD' => ['Bases de Datos', 205], 'ED' => ['Entornos de Desarrollo', 90], 'FOL' => ['Formación y Orientación Laboral', 90],
    'LMSGI' => ['Lenguaje de Marcas y Sistemas de Gestión de Información', 140], 'P' => ['Programación', 270],
    'SI' => ['Sistemas Informáticos', 205]], ['DWEC' => ['Desarrollo Web en Entorno Cliente', 115], 'DWES' => ['Desarrollo Web en Entorno Servidor', 180],
            'DAW' => ['Despliegue de Aplicaciones', 85], 'DIW' => ['Diseño de interfaces web', 115],
            'EIE' => ['Empresa e Iniciativa Emprendedora', 65], 'IT' => ['Inglés Técnico', 40], 'PR' => ['Proyecto de Desarrollo de Aplicaciones Web', 30], 'FCT' => ['Formación en Centros de Trabajo', 370]]];</pre>
                </td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Realiza un programa que muestre las abreviaturas de los módulos junto con su duración a partir del array $DAWTri</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Muestra la duración del módulo de Desarrollo Web en Entorno Servidor (DWES) contenido en el array $DAWTri</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td><p>Construye un array bidimensional, a partir del array $DAWTri, con los valores de horas máximas y mínimas y la suma de las horas de los módulos</p></td>
            </tr>
            <tr>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
        </table>
    </body>
</html>