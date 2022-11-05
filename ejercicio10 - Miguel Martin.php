<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 - Miguel Martín</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<bodys>

    <?php

    // Array asociativo clave : valor
    $equipo = array();

    $equipo = [
        'base' => 'LeBron James',
        'escolta' => 'Michael Jordan',
        'alero' => 'Kobe Bryant',
        'alapivot' => 'Pau Gasol',
        'pivot' => 'Stephen Curry'
    ];

    echo "<h1>Equipo baloncesto</h1>";
    echo "<br> <b>Quinteto inicial de jugadores con su posición: </b><br>";
    // Se muestra la lista de los elementos del array con su clave y valor
    echo "<ul>";
    foreach ($equipo as $posicion => $jugador) {
        echo "<li>" . $posicion . ": " . $jugador . "</li><br>";
    }
    echo "</ul>";
    ?>

    </body>

</html>