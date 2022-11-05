<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02 - Miguel Martín</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body style="width: 200px;">
    <?php
    // Se genera la tabla
    echo "<table border=1>";

    // Variables
    // Multiplicando
    $numero = 8;
    // Multiplicador
    $multiplo = 1;

    /**
     * Cabezera de la tabla
     * opcupa las dos columnas
     * se añade color de fondo
     * indica el número base de la tabla
     */
    echo "<thead><tr><th colspan='2' bgcolor = #AED6F1>Tabla del ", $numero, "</th></tr></thead>";

    // Bucle que genera las 10 filas
    for ($row = 1; $row <= 10; $row++) {

        echo "<tr>";

        // Bucle que genera las columnas
        for ($column = 1; $column <= 1; $column++) {
            // Si la fila es par o impar se establecen unos colores de fondo u otros
            // En ellas se muestra la operación y el producto de esta
            if ($row % 2 == 0) {
                echo "<td bgcolor = #D5D8DC> 8 x ", $multiplo, "</td>";
                echo "<td bgcolor = #ABEBC6>", $multiplo * $numero, "</td>";
            } else {
                echo "<td> 8 x ", $multiplo, "</td>";
                echo "<td bgcolor = #D5F5E3>", $multiplo * $numero, "</td>";
            }

            // Siguiente multiplicador
            $multiplo = $multiplo + 1;
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>

</html>