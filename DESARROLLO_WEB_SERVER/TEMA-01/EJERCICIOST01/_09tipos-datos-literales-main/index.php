<!DOCTYPE html>
<html>
    <head>
        <title>Valores de distintos tipos de datos</title>
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h2>Valores literales</h2>
        <table>
            <tr>
                <td>0</td>
                <td><?php var_dump(0); ?></td>
            </tr>
            <tr>
                <td>235</td>
                <td><?php var_dump(235); ?></td>
            </tr>
            <tr>
                <td>-50432</td>
                <td><?php var_dump(-50432); ?></td>
            </tr>
            <tr>
                <td>075</td>
                <td><?php var_dump(075); ?></td>
            </tr>
            <tr>
                <td>0xFF</td>
                <td><?php var_dump(0xFF); ?></td>
            </tr>
            <tr>
                <td>0b1010</td>
                <td><?php var_dump(0b1010); ?></td>
            </tr>
            <tr>
                <td>1_234_567_890</td>
                <td><?php var_dump(1_234_567_890); ?></td>
            </tr>
            <tr>
                <td>PHP_INT_MAX</td>
                <td><?php var_dump(PHP_INT_MAX); ?></td>
            </tr>
            <tr>
                <td>PHP_INT_MIN</td>
                <td><?php // var_dump(PHP_INT_MIN); ?></td>
            </tr>
        </table>
        <h2>Valores literales flotantes (decimales)</h2>
        <table>
            <tr>
                <td>3.14</td>
                <td><?php var_dump(3.14); ?></td>
            </tr>
            <tr>
                <td>-78.345</td>
                <td><?php var_dump(-78.345); ?></td>
            </tr>
            <tr>
                <td>1.2e13</td>
                <td><?php var_dump(1.2e13); ?></td>
            </tr>
            <tr>
                <td>0.5E-4</td>
                <td><?php var_dump(0.5E-4); ?></td>
            </tr>
            <tr>
                <td>1_000.50</td>
                <td><?php var_dump(1_000.50); ?></td>
            </tr>
            <tr>
                <td>PHP_FLOAT_MAX</td>
                <td><?php var_dump(PHP_FLOAT_MAX); ?></td>
            </tr>
            <tr>
                <td>PHP_FLOAT_MIN</td>
                <td><?php var_dump(PHP_FLOAT_MIN); ?></td>
            </tr>
        </table>
        <h2>Valores literales cadenas</h2>
        <table>
            <tbody class="row-pair">
                <tr>
                    <td>'Esto es una cadena entre comillas simples.'</td>
                </tr>
                <tr>
                    <td><?php var_dump('Esto es una cadena entre comillas simples. '); ?></td>
                </tr>
            </tbody>
            <tbody class="row-pair">
                <tr>
                    <td>"¡Hola, $nombre! "</td>
                </tr>
                <tr> 
                    <td><?php
                        $nombre = 'Juan';
                        var_dump("¡Hola, $nombre!");
                        ?></td>
                </tr>
            </tbody>
            <tbody class="row-pair">
                <tr>
                    <td>"Esto es una cadena entre comillas dobles con secuencias de escape: \n\t- Salto de línea \n\t- Tabulación \n\t- Barra invertida (\\)"</td>
                </tr>
                <tr>
                    <td><pre><?php var_dump("Esto es una cadena entre comillas dobles con secuencias de escape: \n\t- Salto de línea \n\t- Tabulación \n\t- Barra invertida (\\)"); ?></pre></td>
                </tr>
            </tbody>
            <tbody class="row-pair">
                <tr>
                    <td><pre>"Esto es una
cadena en
varias líneas."</pre></td>
                </tr>
                <tr>
                    <td><pre><?php var_dump("Esto es una
cadena en
varias líneas."); ?></pre></td>
                </tr>
            </tbody>
            <tbody class="row-pair">
                <tr>
                    <td><pre><<<'EOT'
    Esto es una cadena nowdoc.
    Puede abarcar varias líneas.
    Sin sustitución de variables.
    EOT</pre></td>
                </tr>
                <tr>
                    <td><pre><?php var_dump(<<<'EOT'
                                            Esto es una cadena nowdoc.
                                            Puede abarcar varias líneas.
                                            Sin sustitución de variables.
                                            EOT); ?></pre></td>
                </tr>
            </tbody>
            <tbody class="row-pair">
                <tr>
                    <td><pre>&lt;&lt;&lt;EOT
    Esto es una cadena heredoc.
    Puede abarcar varias líneas.
    Con sustitución de variables como por ejemplo $edad=$edad.
EOT</pre></td>
                </tr>
                <tr>
                    <td><pre><?php
                            $edad = 32;
                            var_dump(<<<EOT
                                       Esto es una cadena heredoc.
                                       Puede abarcar varias líneas.
                                       Con sustitución de variables como por ejemplo \$edad=$edad.
                                       EOT);
                            ?></pre></td>
                </tr>
            </tbody>
            <tbody class="row-pair">
                <tr>
                    <td>"Esta cadena contiene caracteres especiales: \$variable, \n, \t, \"comillas dobles\", 'comillas simples'"</td>
                </tr>
                <tr>
                    <td><pre><?php var_dump("Esta cadena contiene caracteres especiales: \$variable, \n, \t, \"comillas dobles\", 'comillas simples'"); ?></td>
                </tr>
            </tbody>
            <tbody class="row-pair">
                <tr>
                    <td>Unicode: \u{1F604}</td>
                </tr>
                <tr>
                    <td><?php var_dump("Unicode: \u{1F604}"); ?></td>
                </tr>
            </tbody>
        </table>
       <h2>Valores literales booleanos</h2>
        <table>
            <tr>
                <td>true</td>
                <td><?php var_dump(true); ?></td>
            </tr>
            <tr>
                <td>false</td>
                <td><?php var_dump(false); ?></td>
            </tr>
        </table>
        <h2>Valores literales nulos</h2>
         <table>
            <tr>
                <td>null</td>
                <td><?php var_dump(null); ?></td>
            </tr>
         </table>
    </body>
</html>
