<?php

class App
{
  /**
   * run
   * Si recibe un método cuando lo llaman ejecutará ese método
   * si no lo recibe ejecuta el método 'login'
   */
  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'home';
    }

    $this->$method();
  }

  /**
   * home
   * incluye la vista 'home.php', que mostrará las opciones
   */
  public function home()
  {
    include('views/home.php');
  }

  /**
   * colores
   * incluye la vista 'colores.php', que mostrará la lista de colores
   */
  public function colores()
  {
    include('views/colores.php');
  }

  /**
   * cambio
   * recibe un color mediante get y lo establece como cookie
   * redirige al home de nuevo
   */
  public function cambio()
  {
    $color = $_GET['color'];
    setcookie("color", $color, strtotime("+60 minute"));
    header("Location: ?method=home");
  }

  /**
   * borrar
   * borra la cookie con el color y redirige al home de nuevo
   */
  public function borrar()
  {
    if (isset($_COOKIE["color"])) {
      setcookie("color", "", time() - 7000);
    }
    header("Location: ?method=home");
  }
}
