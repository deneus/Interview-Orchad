<?php

/**
 * @file
 * Class Magic8BallTest.
 */

namespace Orchad\Test;

use Orchad\Magic8Ball;

// @todo: utiliser l'autoloader !
require_once __DIR__. '/../src/Magic8Ball.php';

/**
 * Class Magic8BallTest
 *
 * @package Orchad\Test
 */
class Magic8BallTest extends \PHPUnit_Framework_TestCase
{

  /**
   * Test the magic8ball cases.
   */
  public function testMagiv8Ball()
  {
    $ball = new Magic8Ball();
    $a = $ball->ask('Will i pass this test? ');
    $condition = in_array($a, $ball->getAnswers());
    $this->assertTrue($condition);

    $b = $ball->ask('Will I fail this test?');
    $condition = in_array($b, $ball->getAnswers());
    $this->assertTrue($condition);

    $c = $ball->ask('WILL I PASS THIS TEST?');
    $this->assertEquals($a , $c);

    $d = $ball->ask('Will i pass this test? Kind Regards');
    $this->assertEquals($a , $d);

    $e = $ball->ask('Will i pass this test');
    $this->assertEquals($e, 'Not a question');
  }

}