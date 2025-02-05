<?php
/*
  Veamos un ejercicio resuelto donde detallamos el proceso de subir un archivo,
 * controlaremos el tamaño máximo del archivo (ve cambiando los valores de MAX_FILE_SIZE 
 * para probar los errores) y el tipo del mismo.

  Crearemos un formulario con un input de tipo file para subir un documento PDF a
 * una carpeta "documentos" del servidor. Comprueba errores, el tamaño máximo del 
 * archivo será de 500000 bytes.
 */

if (isset($_POST["enviar"])) {

    $phpFileUploadErrors = array(
        0 => 'There is no error, the file uploaded with success',
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
        3 => 'The uploaded file was only partially uploaded',
        4 => 'No file was uploaded',
        6 => 'Missing a temporary folder',
        7 => 'Failed to write file to disk.',
        8 => 'A PHP extension stopped the file upload.',
    );
    
    if (is_uploaded_file($_FILES["documento"]["tmp_name"])) {
        if ($_FILES["documento"]["type"] === "application/pdf") {
            move_uploaded_file($_FILES["documento"]["tmp_name"], "./documentos/" . $_FILES["documento"]["name"]);
            $errorDescarga = false;
        } else {
            $errorTipo = true;
        }
    } else {
        $errorDescarga = true;
    }
}
?>
<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
        <title>Sube archivo</title>
    </head>
    <body style = "background-color:#1565c0;color:#ffffff;">
        <?php if (isset($_POST["enviar"])): ?>
            <?=
            (isset($errorTipo)) ? "Error, El tipo del archivo no es <b>pdf</b>" :
            (($errorDescarga) ? "Lo sentimos se ha producido un error: {$phpFileUploadErrors[$_FILES['documento']['error']]}" :
            "Archivo subido correctamente")
            ?>
        <?php else: ?>
            <h3 class="text-center">Subida de un fichero</h3>
            <fieldset style="width:40%; margin:auto;">
                <form name="fichero" action="<?php echo $_SERVER['PHP_SELF']; ?>" ENCTYPE="multipart/form-data" method="POST">
                    <!-- Establecemos el tamaño máximo del archivo a 50000 bytes -->
                    <label for="documento" style="font-weight: bold">Elige el Fichero: </label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
                    <input type="file" name="documento" accept="application/pdf">
                    <br><br>
                    <button type="submit" value="Subir" name="enviar">Enviar</button>
                    <button type="reset" value="reset">Limpiar</button>
                </form>
            </fieldset>
        <?php endif ?>
    </body>
</html>

