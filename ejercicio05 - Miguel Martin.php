<?php

// Variables
// Número del que se sacan los divisores
$numero = 169;
// Indicador si es primo
$primo = 0;
// Texto que se imprimirá por pantalla
$texto = "";

echo "Divisores de " . $numero . ": ";

// Bucle que recorre del 1 al número del que sacamos los divisores
// Divide el número de la variable por cada uno del bucle
// Si es divisible lo añade al texto y suma 1 a la variable primo
for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        $texto .= "<br>" . $i;
        $primo++;
    }
}

// En caso de ser mayor que 2 significa que es primo, 
// ya que los primos solo son divisibles entre si mismo y 1
if ($primo > 2)
    echo "El número " . $numero . " es primo.";
else
    echo "Divisores de " . $numero . ": " . $texto;
