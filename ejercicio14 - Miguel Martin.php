<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 14 - Miguel Martín</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <!-- Formulario que se envía al mismo script
        con dos input de números y un desplegable de opciones
        en los de números se introducirán los números con los que operar
        en el desplegable se selecionará el tipo de operación a realizar -->
    <h1>Calculadora Ejercicio 14</h1>
    <form name="miformu" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p>
            <input style="width:80px" type="number" name="num1" id="num1">
            <select style="width:40px" name="operacion" id="operacion">
                <option value="sumar"> + </option>
                <option value="restar"> - </option>
                <option value="multiplicar"> x </option>
                <option value="dividir"> / </option>
            </select>
            <input style="width:80px" type="number" name="num2" id="num2">
        </p>

        <input type="submit" name="envio" id="envio" value="Calcular">
    </form>

    <!-- Se reciben los datos del formulario
        según la selección del deplegable se realizará la operación correspondiente
        con los números escritos y se mostrará el resultado-->
    <?php
    if (isset($_POST) && !empty($_POST)) {
        if (!empty($_POST['num1']) && !empty($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            echo "<br><br>";
            switch ($_POST['operacion']) {
                case 'sumar':
                    echo "$num1 +  $num2 = " . ($num1 + $num2);
                    break;
                case 'restar':
                    echo "$num1 -  $num2 = " . ($num1 - $num2);
                    break;
                case 'multiplicar':
                    echo "$num1 x  $num2 = " . ($num1 * $num2);
                    break;
                case 'dividir':
                    echo "$num1 /  $num2 = " . ($num1 / $num2);
                    break;
            }
        }
    }
    ?>
</body>

</html>