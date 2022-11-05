<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 13 - Miguel Martín</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <!-- Formulario con un 'input' de texto
    Se envía al mismo script
    método: post -->
    <h1>Formulario Ejercicio 13</h1>
    <form name="miformu" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p>
            <label for="nombre">Nombre: </label>
            <!-- input con valor según el anterior post
                si el texto era menor de 3 caracteres se reescribe en el input -->
            <input type="text" name="nombre" id="nombre" value="<?php echo (isset($_POST['nombre']) && strlen($_POST['nombre']) < 3) ? $_POST['nombre'] : '' ?>">
        </p>

        <input type="submit" name="envio" id="envio" value="Enviar">
    </form>

    <!-- Se recoge los datos del formulario,
        si el nombre es mayor de 3 caracteres se saluda,
        sino se avisa -->
    <h2>Datos enviados</h2>
    <?php
    if (isset($_POST) && !empty($_POST)) {
        if (strlen($_POST['nombre']) >= 3) {
            echo "<br><h1>Bienvenido Don " . $_POST['nombre'] . "</h1>";
        } else {
            echo "<br><h2 style='color:red'>INTRODUCE UN NOMBRE (mayor de 3 caracteres)</h2>";
        }
    } else {
        echo "Todavía no hemos recibido nada!";
    }
    ?>
</body>

</html>