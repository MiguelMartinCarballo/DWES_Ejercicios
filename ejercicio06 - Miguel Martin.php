<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 06 - Miguel Martín</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<?php

$equipo = array();

$equipo = [
    'LeBron James',
    'Michael Jordan',
    'Kobe Bryant',
    'Pau Gasol',
    'Stephen Curry'
];


echo "<b>a) Quinteto inicial de jugadores: </b><br>";
echo "<ul>";
foreach ($equipo as $jugador){
    echo "<li>" . $jugador . "</li><br>";
}
echo "</ul>";

echo "<br><hr><br> <b>b) Quinteto inicial de jugadores con su posición: </b><br>";
echo "<ul>";
foreach ($equipo as $posicion=>$jugador){
    echo "<li>" . $posicion . ": " . $jugador . "</li><br>";
}
echo "</ul>";
?>
    
</body>
</html>