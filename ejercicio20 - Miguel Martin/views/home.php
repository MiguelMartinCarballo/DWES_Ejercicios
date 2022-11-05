<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 20 - Miguel Martín</title>
  <link rel="stylesheet" href="../estilo.css">
</head>

<body>
  <h1>Bienvenido a la app de colores</h1>

  <br>
  <!-- Opción para mostrar la lista de colores, llama al método 'colores' -->
  <h2><a href="?method=colores">click para cambiar de color </a></h2>
  <br><br>
  <!-- Opción para borrar el color de fonod y la sesion, llama al método 'borrar' -->
  <h3><a href="?method=borrar">Borrar fondo y sesion </a></h3>

  <!-- Comprueba 'color' en la sesión y lo establece como fondo -->
  <?php
  if (isset($_SESSION["color"])) {
    echo "<body style='background-color: " . $_SESSION["color"] . " '>";
  }
  ?>
</body>

</html>