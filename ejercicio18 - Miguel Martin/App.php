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
      $method = 'login';
    }

    $this->$method();
  }

  /**
   * login
   * Si la cookie 'nombre' esta establecida redirige al método 'home'
   * si no, incluye la vista 'login.php'
   */
  public function login()
  {
    if (isset($_COOKIE['name'])) {
      header('Location: ?method=home');
    } else {
      include('views/login.php');
    }
  }

  /**
   * auth
   * Será llamado desde la vista login
   * Si ha recibido 'name', establecerá una cookie para el nombre y otra para la contraseña
   * y redirigirá al metodo home
   * si no, redirige de nuevo al método login
   */
  public function auth()
  {
    if (isset($_POST['name'])) {
      setcookie('name', $_POST['name'], strtotime("60 minutes"));
      setcookie('password', $_POST['password'], strtotime("60 minutes"));
      header('Location: index.php?method=home');
    } else {
      header('Location: ?method=login');
    }
  }

  /**
   * home
   * Es llamado desde el método 'auth'
   * si la cookie 'deseos' esta establecida la deserializa para obetener la información de los bytes y la guarda
   * si no, crea un array.
   * Siempre que la cookie 'name' esté establecida incluirá la vista 'home.php'
   * donde se mostrará la infomación de la lista de deseos
   */
  public function home()
  {
    if (!isset($_COOKIE['name'])) {
      header('Location: ?method=login');
    } else {
      if (isset($_COOKIE['deseos'])) {
        $deseos = unserialize($_COOKIE['deseos']);
      } else {
        $deseos = array();
      }
      include('views/home.php');
    }
  }

  /**
   * new
   * Deserializa los datos de la cookie 'deseos' en caso de estar establecida y los guarda en un array
   * o crea un array nuevo en caso distinto
   * Añade el nuevo deseo recibido por formulario al array y lo vuelve a poner como cookie
   * Finalmente, redirecciona al metodo 'home' de nuevo
   */
  public function new()
  {
    if (!isset($_POST['new'])) {
      header('Location: index.php?method=home');
    } else {
      if (isset($_COOKIE['deseos'])) {
        $deseos = unserialize($_COOKIE['deseos']);
      } else {
        $deseos = [];
      }
      $deseos[] = $_POST['new'];
      setcookie('deseos', serialize($deseos), strtotime("60 minutes"));
      header('Location: index.php?method=home');
    }
  }

  /**
   * delete
   * Deserializa los datos de la cookie 'deseos' en caso de estar establecida y los guarda en un array
   * o crea un array nuevo en caso distinto
   * Elimina el deseo con el id recibido por formulario del array y lo vuelve a poner como cookie
   * Finalmente, redirecciona al metodo 'home' de nuevo
   */
  public function delete()
  {
    if (isset($_COOKIE['deseos'])) {
      $deseos = unserialize($_COOKIE['deseos']);
    } else {
      $deseos = [];
    }
    $id = $_GET['id'];
    unset($deseos[$id]);
    setcookie('deseos', serialize($deseos), strtotime("60 minutes"));
    header('Location: index.php?method=home');
  }

  /**
   * empty
   * vacía la cookie 'deseos' y vuelve al método 'home'
   */
  public function empty()
  {
    setcookie('deseos', '', time() - 7000);
    header('Location: index.php?method=home');
  }

  /**
   * close
   * Elimina todas las cookies
   * y redirige al método 'login'
   */
  public function close()
  {
    setcookie('deseos', '',  time() - 7000);
    setcookie('name', '',  time() - 7000);
    setcookie('password', '',  time() - 7000);
    header('Location: index.php?method=login');
  }
}
