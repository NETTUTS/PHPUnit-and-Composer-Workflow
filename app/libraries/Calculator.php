<?php namespace App\Libraries;

class Calculator {
  public function add($x, $y)
  {
    if ( !is_numeric($x) || !is_numeric($y) ) {
      throw new \InvalidArgumentException;
    }
    return $x + $y;
  }

  public function minus($x, $y)
  {
    if ( !is_numeric($x) || !is_numeric($y) ) {
      throw new \InvalidArgumentException;
    }
    return $x - $y;
  }

}
