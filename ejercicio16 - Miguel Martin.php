<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Ejercicio 16 - Miguel Martín</title>
  <link rel="stylesheet" href="estilo.css">
</head>

<body>
  <!-- Formulario que se envía al mismo script
  con un input que se guarda en un array -->
  <h2>Formulario Ejercicio 16:</h2>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="text" name="nombres[]">

    <input type="submit" value="Nuevo">

    <hr>
    <ul>

      <!-- Recibe los datos y los imprime en una lista
      usando un input de tipo 'hidden' consigue guardar los anteriores nombres de la lista 
      si no estuviera aparecería solo el último dato -->
      <?php
      if (isset($_GET['nombres'])) {
        foreach ($_GET['nombres'] as $nombre) {
          echo '<li>' . $nombre . '<input type="hidden" name="nombres[]" value="' . $nombre . '"></li><br>';
        }
      }
      ?>
    </ul>
  </form>

</body>

</html>