<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02 - Miguel Martín</title>
</head>

<body style="width: 200px; margin: 40px 70px;">
    <?php
    echo "<table border=1>";

    $numero = 8;
    $multiplo = 1;

    echo "<thead><tr><th colspan='2' bgcolor = #AED6F1>Tabla del ", $numero, "</th></tr></thead>";

    for ($row = 1; $row <= 10; $row++) {

        echo "<tr>";
        
        for ($column = 1; $column <= 1; $column++) {
            if ($row % 2 == 0) {
                echo "<td bgcolor = #D5D8DC> 8 x ", $multiplo, "</td>";
                echo "<td bgcolor = #ABEBC6>", $multiplo * $numero, "</td>";
            }
            else {
                echo "<td> 8 x ", $multiplo, "</td>";
                echo "<td bgcolor = #D5F5E3>", $multiplo * $numero, "</td>";
            }


            $multiplo = $multiplo + 1;
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>

</html>