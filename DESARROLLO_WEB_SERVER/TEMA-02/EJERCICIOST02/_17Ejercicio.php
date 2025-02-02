<?php
/*
  Realiza un programa que dado un array con fechas de nacimiento expresadas en el
  formato "dd/mm/aaaa" devuelva las fechas en el formato "dd mes en letras yyyy"
  de personas que han nacido entre 1998 y 2010 ordenadas por el numero de letras
  del mes en que han nacido sumado al digito que indica su día de nacimiento.

  Puedes utilizar array_filter, usort y array_map para realizar el ejercicio.

  Puedes utilizar el siguiente array de fechas como dato de entrada:

  $fechas = ["01/10/2045", "15/03/2009", "30/10/1989", "08/01/2015", "23/04/2010",
  "20/08/2005", "09/06/2003","21/02/2012", "16/11/2020", "19/10/2000", "03/07/1998",
  "11/09/2004", "13/10/2009", "07/08/2001", "01/05/2008", "11/07/2022", "03/12/2008",
  "05/10/2021", "27/04/2019", "19/04/1980", "04/05/2003"]

  Se pueden manejar los nombres de los meses en inglés.
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $fechas = [
            "01/10/2045", "15/03/2009", "30/10/1989", "08/01/2015", "23/04/2010", "20/08/2005", "09/06/2003",
            "21/02/2012", "16/11/2020", "19/10/2000", "03/07/1998", "11/09/2004", "13/10/2009", "07/08/2001",
            "01/05/2008", "11/07/2022", "03/12/2008", "05/10/2021", "27/04/2019", "19/04/1980", "04/05/2003"
        ];

        $fechas_1998_2010 = array_filter($fechas, fn($x) => (explode("/", $x)[2] >= 1998 && explode("/", $x)[2] <= 2010));
        $ordenFechas = function ($x, $y) {
            return ((explode("/", $x))[0] + strlen((DateTime::createFromFormat('d/m/Y', $x))->format('F')) <=>
            (explode("/", $y))[0] + strlen((DateTime::createFromFormat('d/m/Y', $y))->format('F')));
        };
        usort($fechas_1998_2010, $ordenFechas);
        $fechas_resultado = array_map(fn($x) => (DateTime::createFromFormat('d/m/Y', $x))->format('j F Y'), $fechas_1998_2010);
        print_r($fechas_resultado);
        ?>
    </body>
</html>


