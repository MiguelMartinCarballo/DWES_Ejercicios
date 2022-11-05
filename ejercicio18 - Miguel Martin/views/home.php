<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 18 - Miguel Martín</title>
  <link rel="stylesheet" href="../estilo.css">
</head>

<body style="margin: 5vh 10vh;">
  <h1>Bienvenido <?= $_COOKIE['name'] ?></h1>

  <h2>Lista de deseos</h2>

  <ul>
    <?php
    if (count($deseos)) {
      foreach ($deseos as $posicion => $deseo) {
        echo "<li>$posicion: " . $deseo . ' <a href="?method=delete&id=' . $posicion . '"> borrar</a> </li>';
      }
    } else {
      echo "No hay deseos todavía";
    }
    ?>
  </ul>
  <br>
  <h4><a href="?method=empty">Vaciar lista de deseos</a></h4>

  <br><br><br>
  <h2>Introducir nuevo deseo</h2>
  <form action="?method=new" method="post">
    <label for="new">Deseo: </label>
    <input type="text" name="new">

    <input type="submit" value="añadir">
  </form>
  <br><br><br><br>
  <h4><a href="?method=close">Cerrar sesión</a></h4>
</body>

</html>