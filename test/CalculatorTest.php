<?php

use App\Libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {

  public function setUp()
  {
    $this->calculator = new Calculator;
  }

  public function inputNumbers()
  {
    return [
      [2, 2, 4],
      [2.5, 2.5, 5]
    ];
  }

  /**
   * @dataProvider inputNumbers
   */
  public function testCanAddNumbers($x, $y, $sum)
  {
    $this->assertEquals($sum, $this->calculator->add($x, $y));
  }

  /**
    * @expectedException InvalidArgumentException
    */
  public function testThrowsExceptionIfNonNumberIsPassed()
  {
    $calc = new Calculator;
    $calc->add('a', 'b');
  }
}