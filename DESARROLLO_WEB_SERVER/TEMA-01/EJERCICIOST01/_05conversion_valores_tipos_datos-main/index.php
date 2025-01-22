<!DOCTYPE html>
<html>
    <head>
        <title>Conversión de valores entre tipos</title>
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h2>Conversión booleano</h2>
        <table>
            <tr>
                <td>(bool) "false"</td>
                <td class="respuesta"><?php var_dump((bool) "false"); ?></td>
            </tr>
            <tr>
                <td>(bool) "0"</td>
                <td class="respuesta"><?php var_dump((bool) "0"); ?></td>
            </tr>
            <tr>
                <td>(bool) "0.0"</td>
                <td class="respuesta"><?php var_dump((bool) "0.0"); ?></td>
            </tr>
            <tr>
                <td>(bool) "1"</td>
                <td class="respuesta"><?php var_dump((bool) "1"); ?></td>
            </tr>
            <tr>
                <td>(bool) 1</td>
                <td class="respuesta"><?php var_dump((bool) 1); ?></td>
            </tr>
            <tr>
                <td>(bool) 0</td>
                <td class="respuesta"><?php var_dump((bool) 0); ?></td>
            </tr>
            <tr>
                <td>(bool) 1000</td>
                <td class="respuesta"><?php var_dump((bool) 1000); ?></td>
            </tr>
            <tr>
                <td>(bool) ""</td>
                <td class="respuesta"><?php var_dump((bool) ""); ?></td>
            </tr>
            <tr>
                <td>(bool) " "</td>
                <td class="respuesta"><?php var_dump((bool) " "); ?></td>
            </tr>
            <tr>
                <td>(bool) 0b0</td>
                <td class="respuesta"><?php var_dump((bool) 0b0); ?></td>
            </tr>
            <tr>
                <td>(bool) 0b1</td>
                <td class="respuesta"><?php var_dump((bool) 0b1); ?></td>
            </tr><tr>
                <td>(bool) 0.0</td>
                <td class="respuesta"><?php var_dump((bool) 0.0); ?></td>
            </tr>
            <tr>
                <td>(bool) NULL</td>
                <td class="respuesta"><?php var_dump((bool) NULL); ?></td>
            </tr>
        </table>
        <h2>Conversión entero</h2>
        <table>
            <tr>
                <td>(int) true</td>
                <td class="respuesta"><?php var_dump((int) true); ?></td>
            </tr>
            <tr>
                <td>(int) false</td>
                <td class="respuesta"><?php var_dump((int) false); ?></td>
            </tr>
            <tr>
                <td>(int) 0.6</td>
                <td class="respuesta"><?php var_dump((int) 0.6); ?></td>
            </tr>
            <tr>
                <td>(int) 99.99</td>
                <td class="respuesta"><?php var_dump((int) 99.99); ?></td>
            </tr>
            <tr>
                <td>(int) "123"</td>
                <td class="respuesta"><?php var_dump((int) "123"); ?></td>
            </tr>
            <tr>
                <td>(int) "123.45"</td>
                <td class="respuesta"><?php var_dump((int) "123.45"); ?></td>
            </tr>
            <tr>
                <td>(int) "123Hola"</td>
                <td class="respuesta"><?php var_dump((int) "123Hola"); ?></td>
            </tr>
            <tr>
                <td>(int) "Hola123"</td>
                <td class="respuesta"><?php var_dump((int) "Hola123"); ?></td>
            </tr>
            <tr>
                <td>(int) ""</td>
                <td class="respuesta"><?php var_dump((int) ""); ?></td>
            </tr>
            <tr>
                <td>(int) "0.001"</td>
                <td class="respuesta"><?php var_dump((int) "0.001"); ?></td>
            </tr>
            <tr>
                <td>(int) NULL</td>
                <td class="respuesta"><?php var_dump((int) NULL); ?></td>
            </tr>
        </table>
        <h2>Conversión flotante decimal</h2>
        <table>
            <tr>
                <td>(float) true</td>
                <td class="respuesta"><?php var_dump((float) true); ?></td>
            </tr>
            <tr>
                <td>(float) false</td>
                <td class="respuesta"><?php var_dump((float) false); ?></td>
            </tr>
             <tr>
                <td>(float) 123</td>
                <td class="respuesta"><?php var_dump((float) 123); ?></td>
            </tr>
            <tr>
                <td>(float) "123"</td>
                <td class="respuesta"><?php var_dump((float) "123"); ?></td>
            </tr>
            <tr>
                <td>(float) "123.45"</td>
                <td class="respuesta"><?php var_dump((float) "123.45"); ?></td>
            </tr>
            <tr>
                <td>(float) "123Hola"</td>
                <td class="respuesta"><?php var_dump((float) "123Hola"); ?></td>
            </tr>
            <tr>
                <td>(float) "Hola123"</td>
                <td class="respuesta"><?php var_dump((float) "Hola123"); ?></td>
            </tr>
            <tr>
                <td>(float) ""</td>
                <td class="respuesta"><?php var_dump((float) ""); ?></td>
            </tr>
            <tr>
                <td>(float) 0xA2</td>
                <td class="respuesta"><?php var_dump((float) 0xA2); ?></td>
            </tr>
            <tr>
                <td>(float) "0.001"</td>
                <td class="respuesta"><?php var_dump((float) "0.001"); ?></td>
            </tr>
            <tr>
                <td>(float) NULL</td>
                <td class="respuesta"><?php var_dump((float) NULL); ?></td>
            </tr>
        </table>
        <h2>Conversión cadena</h2>
        <table>
            <tr>
                <td>(string) true</td>
                <td class="respuesta"><?php var_dump((string) true); ?></td>
            </tr>
            <tr>
                <td>(string) false</td>
                <td class="respuesta"><?php var_dump((string) false); ?></td>
            </tr>
            <tr>
                <td>(string) 0</td>
                <td class="respuesta"><?php var_dump((string) 0); ?></td>
            </tr>
            <tr>
                <td>(string) 123</td>
                <td class="respuesta"><?php var_dump((string) 123); ?></td>
            </tr>
            <tr>
                <td>(string) 012</td>
                <td class="respuesta"><?php var_dump((string) 012); ?></td>
            </tr>
            <tr>
                <td>(string) 0.23</td>
                <td class="respuesta"><?php var_dump((string) 0.23); ?></td>
            </tr>
            <tr>
                <td>(string) 0.0</td>
                <td class="respuesta"><?php var_dump((string) 0.0); ?></td>
            </tr>
            <tr>
                <td>(string) NULL</td>
                <td class="respuesta"><?php var_dump((string) NULL); ?></td>
            </tr>
        </table>
    </body>
</html>
