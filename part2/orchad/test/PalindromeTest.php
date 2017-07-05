<?php

/**
 * @file
 * Class PalindromeTest.
 */

namespace Orchad\Test;

use Orchad\Palindrome;

// @todo: utiliser l'autoloader !
//require_once __DIR__. '/../src/Palindrome.php';

/**
 * Class PalindromeTest
 *
 * @package Orchad\Test
 */
class PalindromeTest extends \PHPUnit_Framework_TestCase
{

  /**
   * Test if 'emordnilaP' is NOT a palindrome.
   */
  public function testPalindromeA()
  {
    $palindrome = new Palindrome('emordnilaP');
    $this->assertFalse($palindrome->isPalindrome());
  }

  /**
   * Test if '' is not a palindrome and will return 'UNDETERMINED'.
   */
  public function testPalindromeB()
  {
    $palindrome = new Palindrome('');
    $this->assertEquals($palindrome->isPalindrome(),'UNDETERMINED');
  }

  /**
   * Test if 'Kayak' is a palindrome.
   */
  public function testPalindromeC()
  {
    $palindrome = new Palindrome('Kayak');
    $this->assertTrue($palindrome->isPalindrome());
  }

  /**
   * Test if 'No lemon, no melon' is a palindrome.
   */
  public function testPalindromeD()
  {
    $palindrome = new Palindrome('No lemon, no melon');
    $this->assertTrue($palindrome->isPalindrome());
  }

}