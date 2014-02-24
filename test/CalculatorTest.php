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

  public function inputNumbersForDivide()
  {
      return [
        [12, 6, 2],
        [10, 5, 2]
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
    $calc->div('20', 'a');
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
  
  /**
   * @dataProvider inputNumbersForDivide
   */
  public function testCanDivideNumbers($x, $y, $div)
  {
      $this->assertEquals($div, $this->calculator->div($x, $y));
  }
}