<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 16 - Miguel Martín</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
  <h2>Formulario Ejercicio 16:</h2>
  <form action="">
    <input type="text" name="nombres[]">

    <input type="submit" value="Nuevo">
  
    <hr>
    <ul>
    <?php
    if (isset($_GET['nombres'])) {
      foreach($_GET['nombres'] as $nombre) {
        echo '<li>' . $nombre . '<input type="hidden" name="nombres[]" value="' . $nombre . '"></li><br>';
      }
    }
    ?>
    </ul>
  </form>

</body>

</html>