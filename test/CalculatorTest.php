<?php

use App\Libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {

  public function setUp()
  {
    $this->calculator = new Calculator;
  }

  public function addNumbers()
  {
    return [
      [2, 2, 4],
      [2.5, 2.5, 5]
    ];
  }

  /**
   * @dataProvider addNumbers
   */
  public function testCanAddNumbers($x, $y, $sum)
  {
    $this->assertEquals($sum, $this->calculator->add($x, $y));
  }

 public function minusNumbers()
  {
    return [
      [4, 2, 2],
      [2, 4, -2]
    ];
  }

  /**
   * @dataProvider minusNumbers
   */
  public function testCanMinusNumbers($x, $y, $sum)
  {
    $this->assertEquals($sum, $this->calculator->minus($x, $y));
  }

    /**
    * @expectedException InvalidArgumentException
    */
  public function testThrowsExceptionIfNonNumberIsPassed()
  {
    $this->calculator->add('a', 'b');
    $this->calculator->minus('a', 'b');
  }

}
