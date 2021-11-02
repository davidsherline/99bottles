<?php

declare(strict_types = 1);

require "BottleNumber.php";
require "BottleNumber0.php";
require "BottleNumber1.php";

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
    $bottleNumber = $this->bottleNumberFor($number);
    $nextBottleNumber = $this->bottleNumberFor($bottleNumber->successor());
    // $nextBottleNumber = $bottleNumber->successor();

    return
      ucfirst("{$bottleNumber} of beer on the wall, ") .
      "{$bottleNumber} of beer.\n" .
      "{$bottleNumber->action()}" .
      "{$nextBottleNumber} of beer on the wall.\n";
  }

  public function bottleNumberFor(int $number): BottleNumber {
    if ($number == 0) {
      return new BottleNumber0($number);
    } else if ($number == 1) {
      return new BottleNumber1($number);
    } else {
      return new BottleNumber($number);
    }
  }
}
