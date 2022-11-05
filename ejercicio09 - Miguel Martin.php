<?php

// Se crea un array con datos añadidos uno por uno y se imprimen mediante un foreach
$paises[] = 'Suiza';
$paises[] = 'Islandia';
$paises[] = 'Irlanda';
$paises[] = 'Alemania';

echo "<b>Paises: </b><br>";
foreach ($paises as $pais) {
    echo "- " . $pais . "<br>";
}
