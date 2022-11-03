<?php
$numero = 169;
$primo = true;
$texto = "";

echo "Divisores de " . $numero . ": ";
for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        $texto .= "<br>" . $i;
        $primo = false;
    }
}

if ($primo)
    echo "El número " . $numero . " es primo.";
else 
    echo "Divisores de " . $numero . ": " . $texto;
