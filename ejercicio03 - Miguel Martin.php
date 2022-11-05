<?php

echo "Número divisibles por 3: <br>";
// Bucle que recorre los numeros del 1 al 10 
// y los imprime si el resto de dividirlo por 3 es 0
for ($i = 1; $i <= 10; $i++) {
    if ($i % 3 == 0)
        echo $i . "<br>";
}
