<?php

use App\Libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {

  public function setUp()
  {
    $this->calculator = new Calculator;
  }

  public function inputNumbersForSum()
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
  
  public function inputNumbersForMultiply()
  {
      return [
        [2, 4, 8],
        [10, 20, 200]
      ];
  }


  /**
   * @dataProvider inputNumbersForSum
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
    $calc->mul('3', 'c');
  }
  
  /**
   * @dataProvider inputNumbersForSubstract
   */
  public function testCanSubstractNumber($x, $y, $sub)
  {
      $this->assertEquals($sub, $this->calculator->sub($x, $y));
  }
  
  /**
   * @dataProvider inputNumbersForMultiply
   */
  public function testCanMultiplyNumbers($x, $y, $mul)
  {
      $this->assertEquals($mul, $this->calculator->mul($x, $y));
  }
}