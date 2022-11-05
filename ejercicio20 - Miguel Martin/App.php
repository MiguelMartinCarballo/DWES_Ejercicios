<?php

class App
{

  /**
   * Constructor
   * inicia la clase iniciando una sesión
   */
  public function __construct()
  {
    session_start();
  }

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
   * recibe un color mediante get y lo establece en la sesión
   * redirige al home de nuevo
   */
  public function cambio()
  {
    $color = $_GET['color'];
    $_SESSION["color"] = $color;
    header("Location: ?method=home");
  }

  /**
   * borrar
   * borra la sesión y redirige al home de nuevo
   */
  public function borrar()
  {
    if (isset($_SESSION["color"])) {
      $_SESSION = array();
      session_destroy();
      setcookie(session_name(), '', time() - 7200, '/');
    }
    header("Location: ?method=home");
  }
}
