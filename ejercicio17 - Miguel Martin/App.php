<?php

class App
{

  public function __construct()
  {
    $this->fibonacci = $this->fibonacci();
    $this->potencias2 = $this->potencias2();
    $this->factorial = $this->factorial();
    $this->primos = $this->primos();
  }

  public function run()
  {
    $this->index();
  }

  public function index()
  {
    include('views/index.php');
  }

  public function fibonacci()
  {
    $num1 = 1;
    $num2 = 1;
    $siguiente = 1;
    $fibonacci[] = $siguiente;

    do {
      $fibonacci[] = $siguiente;
      $siguiente = $num1 + $num2;
      $num2 = $num1;
      $num1 = $siguiente;
    } while ($siguiente < 1000000);

    return $fibonacci;
  }


  public function potencias2()
  {
    for ($i = 0; $i <= 24; $i++) {
      $potencias[$i] = pow(2, $i);
    }
    return $potencias;
  }


  private function factorialde($numero)
  {
    $resultado = 1;
    for ($i = 1; $i <= $numero; $i++) {
      $resultado = $resultado * $i;
    }
    return $resultado;
  }

  public function factorial()
  {
    $resultado = 1;
    $i = 1;
    while ($resultado < 1000000) {
      $resultado = $this->factorialde($i);
      if ($resultado < 1000000)
        $factorial[$i] = $resultado;
      $i++;
    }
    return $factorial;
  }

  private function esprimo($numero)
  {
    for ($i = 2; $i < $numero; $i++) {

      if (($numero % $i) == 0) {
        return false;
      }
    }
    return true;
  }

  public function primos()
  {
    for ($i = 2; $i <= 10000; $i++) {
      if ($this->esprimo($i)) {
        $primos[] = $i;
      }
    }
    return $primos;
  }
}
