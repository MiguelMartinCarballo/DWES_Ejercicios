<?php

class App
{
  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'home';
    }

    $this->$method();
  }

  public function home()
  {
    include('views/home.php');
  }

  public function colores()
  {
    include('views/colores.php');
  }

  public function cambio()
  {
    $color = $_GET['color'];
    setcookie("color", $color, strtotime("+60 minute"));
    header("Location: ?method=home");
  }

  public function borrar()
  {
    if (isset($_COOKIE["color"])) {
      setcookie("color", "", time() -7000);
    }
    header("Location: ?method=home");
  }
}
