<!DOCTYPE html>
<html>
    <head>
        <title>Funciones de control de variables</title>
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h2>Funciones de control</h2>
        <table>
            <thead>
                <tr>
                    <th>Valores</th>
                    <th>empty</th>
                    <th>isset</th>
                    <th>is_null</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php $x = ""; ?>
                    <td>$x = ""</td>
                    <td class="conversion"><?php var_dump(empty($x)); ?></td>
                    <td class="conversion"><?php var_dump(isset($x)); ?></td>
                    <td class="conversion"><?php var_dump(is_null($x)); ?></td>
                </tr>
                <tr>
                    <?php $x = null; ?>
                    <td>$x = null</td>
                    <td class="conversion"><?php var_dump(empty($x)); ?></td>
                    <td class="conversion"><?php var_dump(isset($x)); ?></td>
                    <td class="conversion"><?php var_dump(is_null($x)); ?></td>
                </tr>
                <tr>
                    <td>$y no definida</td>
                    <td class="conversion"><?php var_dump(empty($y)); ?></td>
                    <td class="conversion"><?php var_dump(isset($y)); ?></td>
                    <td class="conversion"><?php var_dump(is_null($y)); ?></td>
                </tr>
                <tr>
                    <?php $z; ?>
                    <td>$z sin valor</td>
                    <td class="conversion"><?php var_dump(empty($z)); ?></td>
                    <td class="conversion"><?php var_dump(isset($z)); ?></td>
                    <td class="conversion"><?php var_dump(is_null($z)); ?></td>
                </tr>
                <tr>
                    <?php $x = []; ?>
                    <td>$x = []</td>
                    <td class="conversion"><?php var_dump(empty($x)); ?></td>
                    <td class="conversion"><?php var_dump(isset($x)); ?></td>
                    <td class="conversion"><?php var_dump(is_null($x)); ?></td>
                </tr>
                <tr>
                    <?php $x = [1, 2]; ?>
                    <td>$x = [1,2]</td>
                    <td class="conversion"><?php var_dump(empty($x)); ?></td>
                    <td class="conversion"><?php var_dump(isset($x)); ?></td>
                    <td class="conversion"><?php var_dump(is_null($x)); ?></td>
                </tr>
                <tr>
                    <?php $x = false; ?>
                    <td>$x = false</td>
                    <td class="conversion"><?php var_dump(empty($x)); ?></td>
                    <td class="conversion"><?php var_dump(isset($x)); ?></td>
                    <td class="conversion"><?php var_dump(is_null($x)); ?></td>
                </tr>
                <tr>
                    <?php $x = true; ?>
                    <td>$x = true</td>
                    <td class="conversion"><?php var_dump(empty($x)); ?></td>
                    <td class="conversion"><?php var_dump(isset($x)); ?></td>
                    <td class="conversion"><?php var_dump(is_null($x)); ?></td>
                </tr>
                <tr>
                    <?php $x = 0; ?>
                    <td>$x = 0</td>
                    <td class="conversion"><?php var_dump(empty($x)); ?></td>
                    <td class="conversion"><?php var_dump(isset($x)); ?></td>
                    <td class="conversion"><?php var_dump(is_null($x)); ?></td>
                </tr>
                <tr>
                    <?php $x = "1"; ?>
                    <td>$x = "1"</td>
                    <td class="conversion"><?php var_dump(empty($x)); ?></td>
                    <td class="conversion"><?php var_dump(isset($x)); ?></td>
                    <td class="conversion"><?php var_dump(is_null($x)); ?></td>
                </tr>
                <tr>
                    <?php $x = "0"; ?>
                    <td>$x = "0"</td>
                    <td class="conversion"><?php var_dump(empty($x)); ?></td>
                    <td class="conversion"><?php var_dump(isset($x)); ?></td>
                    <td class="conversion"><?php var_dump(is_null($x)); ?></td>
                </tr>
                <tr>
                    <?php $x = "false"; ?>
                    <td>$x = "false"</td>
                    <td class="conversion"><?php var_dump(empty($x)); ?></td>
                    <td class="conversion"><?php var_dump(isset($x)); ?></td>
                    <td class="conversion"><?php var_dump(is_null($x)); ?></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
