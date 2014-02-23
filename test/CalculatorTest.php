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

  public function inputNumbersForSubstract()
  {
      return [
          [2, 2, 0],
          [-20, -5, -15]
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
    $calc->sub('2', 'b');
  }
  
  /**
   * @dataProvider inputNumbersForSubstract
   */
  public function testCanSubstractNumber($x, $y, $sub)
  {
      $this->assertEquals($sub, $this->calculator->sub($x, $y));
  }
}