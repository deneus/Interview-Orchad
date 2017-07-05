<?php

/**
 * @file
 * Class for Exercise 5.
 */

require __DIR__ . '/../vendor/autoload.php';

$test = new Exercise5();

Class Exercise5 {
  public function __construct() {
    $p = new Orchad\MyCustomIterator();
    echo $p->toString();
  }
}
