<?php

echo "<h3>10 primeros números de la sucesión de fibonacci: </h3><br>";

// Variables
// Dos primerros números de la serie de fibonacci 
$num1 = 1;
$num2 = 1;
// Variable para calcular e imprimir el siguiente número
$siguiente = 1;
echo "$siguiente, ";

// Bucle de 9 repeticiones (ya que se ha impreso por pantalla un número previamente)
for ($i = 1; $i < 10; $i++) {
    // Se imprime el siguiente número
    echo $siguiente;
    // Se calcula cual es el siguiente número de la serie
    // para ello se suman las variables que guardan los dos últimos números impresos
    // y luego a cada uno se le asigna el siguiente para avanzars
    $siguiente = $num1 + $num2;
    $num2 = $num1;
    $num1 = $siguiente;
    if ($i != 9) {
        echo ", ";
    } else {
        echo ".";
    }
}
