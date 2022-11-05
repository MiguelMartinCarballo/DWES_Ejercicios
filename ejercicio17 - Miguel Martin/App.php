<?php

class App
{

  /**
   * Constructor de la clase App
   * Crea las variables dandoles el valor devuelto por los métodos posteriores
   */
  public function __construct()
  {
    $this->fibonacci = $this->fibonacci();
    $this->potencias2 = $this->potencias2();
    $this->factorial = $this->factorial();
    $this->primos = $this->primos();
  }

  // run: lo primero en ejecutarse y llama a la función 'index'
  public function run()
  {
    $this->index();
  }

  // index: incluye la vista 'index.php'
  public function index()
  {
    include('views/index.php');
  }

  /**
   * fibonacci
   * Calcula los números de la sucesión de fibonacci hasta el más cerano a un millon
   * y los añade a un array.
   * Devuelve el array con la serie de números de la sucesión de fibonacci.
   */
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

  /**
   * potencias2
   * Calcula las potencias de base dos 2 hasta 2 elevado a 24
   * y los guarda en un array asociativo con su exponente como clave y el resultado como valor.
   * Devuelve el array con la serie de exponente : resultado (clave : valor).
   */
  public function potencias2()
  {
    for ($i = 0; $i <= 24; $i++) {
      $potencias[$i] = pow(2, $i);
    }
    return $potencias;
  }

  /**
   * factorialde
   * Recibe un número
   * Calcula el factorial del número introducido multiplicacando todos los números anteriores con un bucle
   * Devuelve el factorial calculado
   */
  private function factorialde($numero)
  {
    $resultado = 1;
    for ($i = 1; $i <= $numero; $i++) {
      $resultado = $resultado * $i;
    }
    return $resultado;
  }

  /**
   * factorial
   * haciendo uso del método factorialde() anterior,
   * calcula el factorial de los números empezando por el 1 y aumentando mientras el resultado sea menor que un millon
   * mientras sea menor que un millón los añade a un array asociativo con el número como clave y su factorial como valor
   * Devuelve el array asociativo con número : factorial (clave : valor)
   */
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

  /**
   * esprimo
   * Recive un número
   * Calcula si el número es primo
   * Devuelve un booleano true si es primo, false si no lo es
   */
  private function esprimo($numero)
  {
    for ($i = 2; $i < $numero; $i++) {

      if (($numero % $i) == 0) {
        return false;
      }
    }
    return true;
  }

  /**
   * primos
   * hace uso del método 'esprimo' para calcular si los números del 1 al 10.000 son primos
   * recorriendo un bucle y comprobando cada número
   * si son primos los añade a un array
   * Devuelve el array con los números primos
   */
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
