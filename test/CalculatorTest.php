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

 public function subNumbers()
  {
    return [
      [4, 2, 2],
      [2, 4, -2]
    ];
  }

  /**
   * @dataProvider subNumbers
   */
  public function testCanSubNumbers($x, $y, $sum)
  {
    $this->assertEquals($sum, $this->calculator->sub($x, $y));
  }

 public function mulNumbers()
  {
    return [
      [4, 2, 8],
      [4, 4, 16]
    ];
  }

  /**
   * @dataProvider mulNumbers
   */
  public function testCanMulNumbers($x, $y, $sum)
  {
    $this->assertEquals($sum, $this->calculator->mul($x, $y));
  }

 public function divNumbers()
  {
    return [
      [4, 2, 2],
      [8, 2, 3] // wrong!
    ];
  }

  /**
   * @dataProvider divNumbers
   */
  public function testCanDivNumbers($x, $y, $sum)
  {
    $this->assertEquals($sum, $this->calculator->div($x, $y));
  }

    /**
    * @expectedException InvalidArgumentException
    */
  public function testThrowsExceptionIfNonNumberIsPassed()
  {
    $this->calculator->add('a', 'b');
    $this->calculator->sub('a', 'b');
    $this->calculator->mul('a', 'b');
    $this->calculator->div('a', 'b');
  }

}
