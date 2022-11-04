<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ejemplo</title>
</head>

<body>
    <h1>Formulario Ejercicio 13</h1>
    <form name="miformu" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre"
            value="<?php echo (isset($_POST['nombre']) && strlen($_POST['nombre']) < 3) ? $_POST['nombre'] : '' ?>">
        </p>

        <input type="submit" name="envio" id="envio" 
            value="Enviar">
    </form>

    <h2>Datos enviados</h2>
    <?php
    if (isset($_POST) && !empty($_POST)) {
        if(strlen($_POST['nombre']) >= 3){
            echo "<br><h1>Bienvenido Don " . $_POST['nombre'] . "</h1>";
            
        }else{
            echo "<br><h2 style='color:red'>INTRODUCE UN NOMBRE (mayor de 3 caracteres)</h2>";
            
        }
    } else {
        echo "Todavía no hemos recibido nada!";
    }
    ?>
</body>

</html>