<?php

echo "<h3>10 primeros números de la sucesión de fibonacci: </h3><br>";

$num1 = 1;
$num2 = 1;
$siguiente = 1;
echo "$siguiente, ";


for ($i = 1; $i < 10; $i++) {
    echo $siguiente;
    $siguiente = $num1 + $num2;
    $num2 = $num1;
    $num1 = $siguiente;
    if($i != 9){
        echo ", ";
    }else{
        echo ".";
    }
}
