<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12 - Miguel Martín</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <?php
        if(isset($_GET['envio'])){
            if(!empty($_GET['nombre'])){
                echo "<br><h1>Bienvenido Don " . $_GET['nombre'] . "</h1>";
            }else{
                echo "<br><h1 style='color:red'>INTRODUCE UN NOMBRE</h1>";
                echo "<br><h2><a href='ejercicio12 - Miguel Martin.html'> Atrás </a></h2>";
                exit;
            }
        }
    ?>
</body>
</html>