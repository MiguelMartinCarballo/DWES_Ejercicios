<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Ejercicio 15 - Miguel Martín</title>
  <link rel="stylesheet" href="estilo.css">
</head>

<body>
  <!-- Formulario que se envía al mismo script
      con inputs de texto que se nombran con el mismo nombre y es un array -->
  <h2>Formulario Ejercicio 15:</h2>
  <form name="miformu" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
    <input type="text" name="nombres[]">
    <input type="text" name="nombres[]">
    <input type="text" name="nombres[]">

    <input type="submit" value="Nuevo">
  </form>

  <hr>

  <!-- Se recibe el array con los datos y se recorre -->
  <?php
  if (isset($_GET['nombres'])) {
    foreach ($_GET['nombres'] as $nombre) {
      echo "$nombre<br>";
    }
  }
  ?>

</body>

</html>