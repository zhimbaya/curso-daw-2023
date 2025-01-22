<!DOCTYPE html>
<html>
    <head>
        <title>Funciones de librería</title>
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h2>Funciones de librería</h2>
        <table>
            <tr>
                <td> round(0.50)</td>
                <td class="respuesta"><?php var_dump(round(0.50)); ?></td>
            </tr>
            <tr>
                <td>round(-4.60)</td>
                <td class="respuesta"><?php var_dump(round(-4.60)); ?></td>
            </tr>
            <tr>
                <td>round(5.6793, 2)</td>
                <td class="respuesta"><?php var_dump(round(5.6793, 2)); ?></td>
            </tr>
            <tr>
                <td>pow(2,4)</td>
                <td class="respuesta"><?php var_dump(pow(2, 4)); ?></td>
            </tr>
            <tr>
                <td> intdiv(5, 2)</td>
                <td class="respuesta"><?php var_dump(intdiv(5, 2)); ?></td>
            </tr>
            <tr>
                <td>decbin(140)</td>
                <td class="respuesta"><?php var_dump(decbin(140)); ?></td>
            </tr>
            <tr>
                <td>ceil(0.40)</td>
                <td class="respuesta"><?php var_dump(ceil(0.40)); ?></td>
            </tr>
            <tr>
                <td>ceil(-5.1)</td>
                <td class="respuesta"><?php var_dump(ceil(-5.1)); ?></td>
            </tr>
            <tr>
                <td>max(22, 14, 68, 18, 15)</td>
                <td class="respuesta"><?php var_dump(max(22, 14, 68, 18, 15)); ?></td>
            </tr><tr>
                <td>mt_rand(0, 10)</td>
                <td class="respuesta"><?php var_dump(mt_rand(0, 10)); ?></td>
            </tr>
            <tr>
                <td>pi()</td>
                <td class="respuesta"><?php var_dump(pi()); ?></td>
            </tr>
            <tr>
                <td>sqrt(9)</td>
                <td class="respuesta"><?php var_dump(sqrt(9)); ?></td>
            </tr>
            <tr>
                <td>floor(5.8)</td>
                <td class="respuesta"><?php var_dump(floor(5.8)); ?></td>
            </tr>
            <tr>
                <td>floor(-5.9)</td>
                <td class="respuesta"><?php var_dump(floor(-5.9)); ?></td>
            </tr>
            <tr>
                <td>abs(-5)</td>
                <td class="respuesta"><?php var_dump(abs(-5)); ?></td>
            </tr>
            <tr>
                <td>cos(deg2rad(60))</td>
                <td class="respuesta"><?php var_dump(cos(deg2rad(60))); ?></td>
            </tr>
            <tr>
                <td>max(5, 8, 3)</td>
                <td class="respuesta"><?php var_dump(max(5, 8, 3)); ?></td>
            </tr>
            <tr>
                <td>chunk_split("Hola mundo!",1,".")</td>
                <td class="respuesta"><?php var_dump(chunk_split("Hola mundo!", 1, ".")); ?></td>
            </tr>
            <tr>
                <td>chr(52)</td>
                <td class="respuesta"><?php var_dump(chr(52)); ?></td>
            </tr>
            <tr>
                <td>count_chars("Hola World!", 3)</td>
                <td class="respuesta"><?php var_dump(count_chars("Hola World!", 3)); ?></td>
            </tr>
            <tr>
                <td>count_chars("Hola World!", 1)</td>
                <td class="respuesta"><?php var_dump(count_chars("Hola World!", 1)); ?></td>
            </tr>
            <tr>
                <td>explode(" ", "Hola mundo. It\'s a beautiful day.")</td>
                <td class="respuesta"><?php var_dump(explode(" ", "Hola mundo. It\'s a beautiful day.")); ?></td>
            </tr>
            <tr>
                <td>htmlspecialchars("This is some <b>bold</b> text.")</td>
                <td class="respuesta"><?= htmlspecialchars("This is some <b>bold</b> text.") ?></td>
            </tr>
            <tr>
                <td>ltrim("Hola World!", "Hola")</td>
                <td class="respuesta"><?php var_dump(ltrim("Hola World!", "Hola")); ?></td>
            </tr>
            <tr>
                <td>ord("hello")</td>
                <td class="respuesta"><?php var_dump(ord("hello")); ?></td>
            </tr>
            <tr>
                <td>str_repeat("Guau",13)</td>
                <td class="respuesta"><?php var_dump(str_repeat("Guau", 13)); ?></td>
            </tr>
            <tr>
                <td>str_replace("mundo","tierra","Hola mundo!")</td>
                <td class="respuesta"><?php var_dump(str_replace("mundo", "tierra", "Hola mundo!")); ?></td>
            </tr>
            <tr>
                <td>str_split("Hola")</td>
                <td class="respuesta"><?php var_dump(str_split("Hola")); ?></td>
            </tr>
            <tr>
                <td>str_word_count("Hola mundo!")</td>
                <td class="respuesta"><?php var_dump(str_word_count("Hola mundo!")); ?></td>
            </tr>
            <tr>
                <td>strcmp("Hola mundo!","Hola mundo!")</td>
                <td class="respuesta"><?php var_dump(strcmp("Hola mundo!", "Hola mundo!")); ?></td>
            </tr>
            <tr>
                <td>strpos("I love php, I love php too!","php")</td>
                <td class="respuesta"><?php var_dump(strpos("I love php, I love php too!", "php")); ?></td>
            </tr>
            <tr>
                <td>strrev("Hola World!")</td>
                <td class="respuesta"><?php var_dump(strrev("Hola World!")); ?></td>
            </tr>
            <tr>
                <td>str_pad("Hola", 10, "_", STR_PAD_BOTH)</td>
                <td class="respuesta"><?php var_dump(str_pad("Hola", 10, "_", STR_PAD_BOTH)); ?></td>
            </tr>
            <tr>
                <td>str_contains('Hola', 'ol')</td>
                <td class="respuesta"><?php var_dump(str_contains('Hola', 'ol')); ?></td>
            </tr>
            <tr>
                <td>str_shuffle("Hola")</td>
                <td class="respuesta"><?php var_dump(str_shuffle("Hola")); ?></td>
            </tr>
            <tr>
                <td>strspn("Hola mundo!","kHlleo")</td>
                <td class="respuesta"><?php var_dump(strspn("Hola mundo!", "kHlleo")); ?></td>
            </tr>
            <tr>
                <td>strtoupper("Hola WORLD!")</td>
                <td class="respuesta"><?php var_dump(strtoupper("Hola WORLD!")); ?></td>
            </tr>
            <tr>
                <td>strtolower("Hola, Mundo!")</td>
                <td class="respuesta"><?php var_dump(strtolower("Hola, Mundo!")); ?></td>
            </tr>
            <tr>
                <td>substr("Hola mundo", 2, 3)</td>
                <td class="respuesta"><?php var_dump(substr("Hola mundo", 2, 3)); ?></td>
            </tr>
            <tr>
                <td>strlen("Hola")</td>
                <td class="respuesta"><?php var_dump(strlen("Hola")); ?></td>
            </tr>
        </table>
    </body>
</html>
