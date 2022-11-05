<?php

// Se crea un array con datos y se imprimen mediante un foreach
$paises = [
    'Suiza',
    'Islandia',
    'Irlanda',
    'Alemania'
];

echo "<b>Paises: </b><br>";
foreach ($paises as $pais) {
    echo "- " . $pais . "<br>";
}
