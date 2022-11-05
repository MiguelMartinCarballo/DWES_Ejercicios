<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17 - Miguel Martín</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <h1>Ejercicio 17</h1>
    <p>
        <h3>Sucesión de Fibonacci: </h3>
        <?php
            foreach($this->fibonacci as $num){
                echo "$num ";
            }
        ?>
        <br><br>

        <h3>Potencias de 2: </h3>
        <?php
            foreach($this->potencias2 as $pot => $res){
                echo "2^$pot = $res<br>";
            }
        ?>
        <br>

        <h3>Factoriales: </h3>
        <?php
            foreach($this->factorial as $num => $fac){
                echo "$num! = $fac<br>";
            }
        ?>
        <br>

        <h3>Números primos entre 1 y 10000: </h3>
        <?php
            foreach($this->primos as $num){
                echo "$num ";
            }
        ?>
    </p>
</body>
</html>