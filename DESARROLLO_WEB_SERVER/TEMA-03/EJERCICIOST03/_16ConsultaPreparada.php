<?php
$host = "localhost";
$db = "proyecto";
$user = "gestor";
$pass = "secreto";
$dsn = "mysql:host=$host;dbname=$db";

if (filter_has_var(INPUT_POST, "buscar_productos")) {
  try {
      $bd = new PDO($dsn, $user, $pass);
      $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $familia = filter_input(INPUT_POST, 'familia', FILTER_SANITIZE_STRING);
      $consultaProductos = 'SELECT id, nombre, pvp FROM productos WHERE familia=:familia';
      $stmtConsultaProductosPorFamilia = $bd->prepare($consultaProductos);
      $stmtConsultaProductosPorFamilia->bindParam(':familia', $familia, PDO::PARAM_STR, 30);
     $stmtConsultaProductosPorFamilia->execute();
      $productos = $stmtConsultaProductosPorFamilia->fetchAll(PDO::FETCH_OBJ);
      $stmtConsultaProductosPorFamilia = null;
      $bd = null;  
  } catch (PDOexception $e) {
   die("Error en operación con la base de datos: " . $e->getMessage());
}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conversión de números decimales</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <div class ="page">
            <h1>Productos de una familia</h1>
            <form class="form" name="form_conversion_base_x" 
                  action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="input-section">
                    <label for="familia">Familia:</label> 
                    <input id="familia" value="<?= $familia ?? '' ?>" name="familia"/>
                </div>
                <div class="submit-section">
                    <input class="submit" type="submit" 
                           value="Buscar" name="buscar_productos" /> 
                </div>
                <?php if (filter_has_var(INPUT_POST, "buscar_productos")): ?>
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($productos as $producto): ?>
                                <tr>
                                    <td><?= $producto->id ?></td>
                                    <td><?= $producto->nombre ?></td>
                                    <td> <?= $producto->pvp ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                <?php endif ?>
            </form>
        </div>
    </body>
</html>