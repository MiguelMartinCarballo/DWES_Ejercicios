<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11 - Miguel Martín</title>
    <link rel="stylesheet" href="../estilo.css">
</head>

<body>
    <h1>Registro de libro: </h1>

    <!-- En php se reciben los datos mediante el método get y,
        si no están vacíos se imprimen por pantalla,
        si están vacíos se avisa de ello -->
    <?php
    if (isset($_GET['envio'])) {
        if (!empty($_GET['titulo'])) {
            $titulo = $_GET['titulo'];
            echo "<br> Título : " . $_GET['titulo'];
        } else {
            echo "<br><h3>No has introducido ningun título</h3>";
        }

        if (!empty($_GET['autor'])) {
            $autor = $_GET['autor'];
            echo "<br> Autor : " . $_GET['autor'];
        } else {
            echo "<br><h3>No has introducido ningun título</h3>";
        }

        if (!empty($_GET['editor'])) {
            $editor = $_GET['editor'];
            echo "<br> Editor : " . $_GET['editor'];
        } else {
            echo "<br><h3>No has introducido ningun título</h3>";
        }

        if (!empty($_GET['pagina'])) {
            $pagina = $_GET['pagina'];
            echo "<br> Página : " . $_GET['pagina'];
        } else {
            echo "<br><h3>No has introducido ningun título</h3>";
        }
    }
    ?>
</body>

</html>