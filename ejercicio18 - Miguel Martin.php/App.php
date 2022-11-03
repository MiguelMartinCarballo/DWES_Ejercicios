<?php

class App
{
  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'login';
    }

    $this->$method();
  }

  public function login()
  {
    if (isset($_COOKIE['name'])) {
      header('Location: ?method=home');
    } else {
      include('views/login.php');
    }
  }

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

  public function empty()
  {
    setcookie('deseos', '', time() - 7000);
    header('Location: index.php?method=home');
  }

  public function close()
  {
    setcookie('deseos', '',  time() - 7000);
    setcookie('name', '',  time() - 7000);
    setcookie('password', '',  time() - 7000);
    header('Location: index.php?method=login');
  }
}
