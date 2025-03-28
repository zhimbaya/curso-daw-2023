<?php
//Modifica la página web que muestra las unidades de un producto en las distintas 
//tiendas, obtenida en un ejercicio anterior utilizando MySQLi, para que use PDO.

$host = "localhost";
$db = "proyecto";
$user = "gestor";
$pass = "secreto";
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
try {
    $conProyecto = new PDO($dsn, $user, $pass);
    $conProyecto->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión a la base de datos: " . $e->getMessage());
}

if (filter_has_var(INPUT_POST, 'enviar')) {
    $petStock = true;
    $codProd = filter_input(INPUT_POST, 'producto', FILTER_UNSAFE_RAW);
    try {
        $consultaProducto = "select nombre , nombre_corto from productos where id=$codProd";
        $resultadoConsultaProducto = $conProyecto->query($consultaProducto);
        $producto = $resultadoConsultaProducto->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        $errorConsultaProducto = true;
    }
    try {
        $consultaStock = "select unidades, tiendas.nombre as tienda_nombre from stocks, tiendas where tienda=tiendas.id AND producto=$codProd";
        $resultadoStockProducto = $conProyecto->query($consultaStock);
        $stocksProducto = $resultadoStockProducto->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        $errorConsultaStock = true;
    }
} else {
    try {
        $consultaProductos = "select id, nombre, nombre_corto from productos order by nombre";
        $resultadoProductos = $conProyecto->query($consultaProductos);
        $productos = $resultadoProductos->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $exc) {
        $errorConsultaProductos = true;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0,
              maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- enlaces para usar Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <title>Conjuntos de resultados en PDO</title>
    </head>
    <body class="bg-info">
        <h3 class="text-center mt-2 font-weight-bold">Unidades de un producto</h3>
        <div class="container mt-3">
            <?php if (isset($petStock)): ?>
                <h4 class="mt-3 mb-3 text-center">Unidades del Producto: <?= "{$producto->nombre} ({$producto->nombre_corto})" ?></h4>
                <a href="<?= $_SERVER['PHP_SELF'] ?>" class="btn btn-success m-2">Consultar Otro Artículo</a>
                <?php if (isset($errorConsultaStock)): ?>
                    <p class="font-weight-bold text-success mt-3">Problemas con la consulta de stock</p>
                <?php else: ?>
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr class="text-center font-weight-bold">
                                <th>Nombre Tienda</th>
                                <th>Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($stocksProducto as $stockProducto): ?>
                                <tr>
                                    <td><?= $stockProducto->tienda_nombre ?></td>
                                    <td class="textcenter"><?= $stockProducto->unidades ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                <?php endif ?>
            <?php else: ?>
                <form name="formulario" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="form-group">
                        <label for="p" class="font-weight-bold">Elige un producto </label>
                        <?php if (!isset($errorConsultaProductos)): ?>
                            <select class="form-control" id="p" name="producto">
                                <?php foreach ($productos as $producto): ?>
                                    <option value="<?= $producto->id ?>"><?= $producto->nombre ?></option>
                                <?php endforeach ?>
                            </select>
                        <?php else: ?>
                            <h4><?= "No se han podido recuperar productos" ?></h4>
                        <?php endif ?>
                    </div>
                    <div class="mt-2">
                        <input type="submit" class="btn btn-warning me-3" 
                               value="Consultar Stock" <?= isset($errorConsultaProductos) ? "disabled" : '' ?> name="enviar">
                    </div>
                </form>
            </div>
        <?php endif ?>
    </body>
</html>

