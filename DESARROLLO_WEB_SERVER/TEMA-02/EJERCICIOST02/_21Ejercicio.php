<!DOCTYPE html>
<!--Crea un formulario HTML para introducir el nombre del alumno y el módulo o 
los módulos que cursa, a escoger “Desarrollo Web en Entorno Servidor”, 
“Desarrollo Web en Entorno Cliente” o ambas. Envía el resultado a la página 
“procesa.php”, 
que será la encargada de procesar los datos. No es necesario, en este ejercicio, 
que hagas la página de procesar datos.-->
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Formularios</title>
    </head>
    <body style="background: gainsboro">
        <form name="formulario" action="procesa.php" method="POST">
            <fieldset style="margin:auto">
                <legend style="font-weight: bold">Datos</legend>
                <div>
                    <label for="nombre">Nombre:</Label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" required />
                </div>
                <br/>
                <div>
                    <label for="fechanacimiento">Fecha de Nacimiento:</Label>
                    <input id="fechanacimiento" type="date" name="fechanacimiento" />
                </div>
                <br/>
                <div>
                    <label for="centro">Centro:</Label> 
                    <select id="centro" name="centro">
                        <option value="Alcobendas">Alcobendas</option>
                        <option value="Alcorcón">Alcorcón</option>
                        <option value="Alcalá de Henares">Alcalá de Henares</option>
                    </select> 
                </div>
                <br/>
                <div>
                    <label>Grupo:</label>
                    <div>
                        <input id="d1" type="radio" name="grupo" value="D1" /> 
                        <label for="d1">D1</label>
                    </div>
                    <div>
                        <input id="d2" type="radio" name="grupo" value="D2" /> 
                        <label for="d2">D2</label>
                    </div>
                </div>
                <br/>
                <fieldset>
                    <legend style="font-weight: bold">Elige Modulos</legend>
                    <p><input type="checkbox" name="modulos[]" value="PROG" />Programación.</p>
                    <p><input type="checkbox" name="modulos[]" value="SSII" />Sistemas Informáticos.</p>
                    <p><input type="checkbox" name="modulos[]" value="BBDD" />Bases de Datos.</p>
                    <p><input type="checkbox" name="modulos[]" value="LMSGI" />Lenguaje de Marcas y Sistemas de Gestión de Información.</p>
                    <p><input type="checkbox" name="modulos[]" value="FOL" />Formación y Orientación Laboral.</p>
                </fieldset>
                <br/>
                <div>
                    <input type="submit" value="Enviar" name="enviar" />
                    <input type="reset" value="Limpiar" />
                </div>
            </fieldset>
        </form>
    </body>
</html>