<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 19 - Miguel Martín</title>
  <link rel="stylesheet" href="../estilo.css">
</head>

<body>
  <h1>Bienvenido a la app de colores</h1>

  <br>
  <!-- Opción para mostrar la lista de colores, llama al método 'colores' -->
  <h2><a href="?method=colores">click para cambiar de color </a></h2>
  <br><br>
  <!-- Opción para borrar el color de fonod y la cookie, llama al método 'borrar' -->
  <h3><a href="?method=borrar">Borrar fondo y cookie </a></h3>

  <!-- Comprueba que haya una cookie 'color' y la establece como fondo -->
  <?php
  if (isset($_COOKIE["color"])) {
    echo "<body style='background-color: " . $_COOKIE["color"] . " '>";
  }
  ?>
</body>

</html>