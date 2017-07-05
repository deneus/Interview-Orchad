<?php

/**
 * @file
 * Class myCustomIteration.
 */

namespace Orchad;

/**
 * Defines a class for generating roman numerals from integers.
 */
class MyCustomIterator {

  protected $result;

  /**
   * MyCustomIterator constructor.
   */
  public function __construct() {
    $this->result = '';
    for ($i = 0; $i<=100; $i++) {
      $this->result .= $this->generateOutput($i);
    }
  }

  /**
   * Generate the expected result.
   *
   * @param $i integer.
   *  The number to process.
   *
   * @return string
   *  The output regarding the number send through.
   */
  private function generateOutput($i) {
    $output = '';
    if ($this->isMultipleOf3($i) && $this->isMultipleOf5($i)) {
      $this->result .= 'POP';
    }
    else {
      if ($this->isMultipleOf3($i)) {
        $output = 'SNAP';
      }
      elseif ($this->isMultipleOf5($i)) {
        $output = 'CRACKLE';
      }
      else {
        $output = $i;
      }
    }
    return $output;
  }

  /**
   * Is the number of multiple of 3.
   *
   * @param $number
   *   The number to test.
   *
   * @return bool
   *   If the number is multiple or not.
   */
  public function isMultipleOf3($number) {
    if ($number % 3 === 0) {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * Is the number of multiple of 5.
   *
   * @param $number
   *   The number to test.
   *
   * @return bool
   *   If the number is multiple or not.
   */
  public function isMultipleOf5($number) {
    if ($number % 5 === 0) {
      return TRUE;
    }
    return FALSE;

  }
  public  function toString(){
    return $this->result;
  }

}
