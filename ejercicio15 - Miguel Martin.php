<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ejemplo</title>
</head>

<body>
  <h2>Formulario Ejercicio 15:</h2>
  <form name="miformu" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
    <input type="text" name="nombres[]">
    <input type="text" name="nombres[]">
    <input type="text" name="nombres[]">
    
    <input type="submit" value="Nuevo">
    </form>
    
    <hr>
    <?php
    if (isset($_GET['nombres'])) {
      foreach($_GET['nombres'] as $nombre) {
        echo "$nombre<br>";
      }
    }
    ?>

</body>

</html>