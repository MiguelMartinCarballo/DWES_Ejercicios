<?php

echo "10 primeros números de la sucesión de fibonacci: <br> 0, 1, 1, ";

$num1 = 1;
$num2 = 1;
$siguiente;

for ($i = 3; $i < 10; $i++) {
    $siguiente = $num1 + $num2;
    $num2 = $num1;
    $num1 = $siguiente;
    echo $siguiente;
    if($i != 9){
        echo ", ";
    }else{
        echo ".";
    }
}
