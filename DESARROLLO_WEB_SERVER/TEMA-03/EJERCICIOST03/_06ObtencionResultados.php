<?php
//Crea una página web en la que se muestren las unidades existentes de un 
//determinado producto en cada una de las tiendas. Para seleccionar el 
//producto concreto utiliza un cuadro de selección dentro de un formulario 
//en esa misma página. Puedes usar como base los siguientes ficheros.

$controlador = new mysqli_driver();
$controlador->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
try {
    $conProyecto = new mysqli('localhost', 'gestor', 'secreto', 'proyecto');
} catch (mysqli_sql_exception $e) {
    die("Error en la conexión a la base de datos: " . $e->getMessage());
}
if (filter_has_var(INPUT_POST, 'enviar')) {
    $petStock = true;
    $codProd = filter_input(INPUT_POST, 'producto', FILTER_UNSAFE_RAW);
    try {
        $consultaProducto = "select nombre , nombre_corto from productos where id=$codProd";
        $resultadoConsultaProducto = $conProyecto->query($consultaProducto);
        $datosProducto = $resultadoConsultaProducto->fetch_assoc();
        $resultadoConsultaProducto->free();
    } catch (mysqli_sql_exception $e) {
        $errorConsultaProducto = true;
    }
    try {
        $consultaStock = "select unidades, tiendas.nombre as tienda_nombre from stocks, tiendas where tienda=tiendas.id AND producto=$codProd";
        $resultadoStockProducto = $conProyecto->query($consultaStock);
    } catch (mysqli_sql_exception $e) {
        $errorConsultaStock = true;
    }
} else {
    try {
        $consultaProductos = "select id, nombre, nombre_corto from productos order by nombre";
        $resultadoProductos = $conProyecto->query($consultaProductos);
        $datosProductos = $resultadoProductos->fetch_all(MYSQLI_ASSOC);
        $resultadoProductos->free();
    } catch (mysqli_sql_exception $e) {
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
        <title>Conjuntos de resultados en MySQLi </title>
    </head>
    <body class="bg-info">
        <div class="container mt-3">
            <h3 class="text-center mt-2 font-weight-bold">Unidades de un producto</h3>
            <?php if (isset($petStock)): ?>
                <h4 class="mt-3 mb-3 text-center">Unidades del Producto: <?= "{$datosProducto['nombre']} {$datosProducto['nombre_corto']}" ?></h4>
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
                            <?php while ($stockProducto = $resultadoStockProducto->fetch_assoc()): ?>
                                <tr>
                                    <td><?= $stockProducto['tienda_nombre'] ?></td>
                                    <td class="textcenter"><?= $stockProducto['unidades'] ?></td>
                                </tr>
                            <?php endwhile ?>
                        </tbody>
                    </table>
                    <?php
                    $resultadoStockProducto->close();
                    ?>
                <?php endif ?>
            <?php else: ?>
                <form name="formulario" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="row">
                        <label for="p" class="font-weight-bold">Elige un producto </label>
                        <?php if (!isset($errorConsultaProductos)): ?>
                            <select class="form-control" id="p" name="producto">
                                <?php foreach ($datosProductos as $producto): ?>
                                    <option value="<?= $producto['id'] ?>"><?= $producto['nombre'] ?></option>
                                <?php endforeach ?>
                            </select>
                        <?php else: ?>
                            <h4><?= "No se han podido recuperar productos" ?></h4>
                        <?php endif ?>
                    </div>
                    <div class="mt-2">
                        <input type="submit" class="btn btn-warning me-3" value="Consultar Stock" <?= isset($errorConsultaProductos) ? "disabled" : '' ?>
                               name="enviar">
                    </div>
                </form>
            </div>
        <?php endif ?>
    </body>
</html>
<?php
$conProyecto->close();
?>
