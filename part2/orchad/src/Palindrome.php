<?php

/**
* @file
* Class Palindrome.
*/

namespace Orchad;

/**
* Defines a class for generating roman numerals from integers.
*/
class Palindrome {

  private $string;

  /**
   * Palindrome constructor.
   *
   * @param String $string
   *  The string to test.
   */
  public function __construct(String $string) {
    $this->setString($string);
  }

  /**
   * Verift if it s a palindrome.
   *
   * @return bool.
   *  If it's a palindrome or not.
   */
  public function isPalindrome() {
    if ($this->getString() === '') {
      return 'UNDETERMINED';
    }

    // Ignore non-alphanumeric characters.
    // The regexp comes from stackexchange.
    $string = preg_replace("/[^A-Za-z0-9 ]\s+/", '', $this->getString());
    $string = str_replace(' ','',$string);
    // Case insensitive.
    if (strtolower($string) === strtolower(strrev($string))) {
      return TRUE;
    }

    return FALSE;

  }

  /**
   * Getter for string.
   *
   * @return String
   */
  public function getString() {
    return $this->string;
  }

  /**
   * Setter for string.
   *
   * @param String $string
   */
  public function setString($string) {
    $this->string = $string;
  }

}
