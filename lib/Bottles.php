<?php

declare(strict_types = 1);

require "BottleNumber.php";
require "BottleNumber0.php";
require "BottleNumber1.php";
require "BottleNumber6.php";

class Bottles {
  public function song(): string {
    return $this->verses(99, 0);
  }

  public function verses(int $upper, int $lower): string {
    return implode(
      "\n",
      array_map([$this, 'verse'], range($upper, $lower))
    );
  }

  public function verse(int $number): string {
    $bottleNumber = BottleNumber::for($number);
    
    return
      ucfirst("{$bottleNumber} of beer on the wall, ") .
      "{$bottleNumber} of beer.\n" .
      "{$bottleNumber->action()}" .
      "{$bottleNumber->successor()} of beer on the wall.\n";
  }
}
