<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin: 5vh 10vh">

<?php

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
echo "<ul>";
foreach ($equipo as $posicion=>$jugador){
    echo "<li>" . $posicion . ": " . $jugador . "</li><br>";
}
echo "</ul>";
?>
    
</body>
</html>