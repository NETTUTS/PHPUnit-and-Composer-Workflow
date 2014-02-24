<?php namespace App\Libraries;

class Calculator {
  public function add($x, $y)
  {
    if ( !is_numeric($x) || !is_numeric($y) ) {
      throw new \InvalidArgumentException;
    }
    return $x + $y;
  }
  
  public function sub($x, $y)
  {
      if ( !is_numeric($x) || !is_numeric($y)) {
          throw new \InvalidArgumentException;
      }
      return $x - $y;
  }
  
  public function mul($x, $y)
  {
      if ( !is_numeric($x) || !is_numeric($y)) {
          throw new \InvalidArgumentException;
      }
      return $x * $y;
  }
  
  
}