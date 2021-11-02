<?php

class BottleNumber {
  public static function for(int $number): BottleNumber {
    $className = 'BottleNumber' . $number;
    if (!class_exists($className)) {
      $className = BottleNumber::class;
    }

    return new $className($number);
  }

  public function __construct(int $number) {
    $this->number = $number;
  }

  public function __toString(): string {
    return $this->quantity() . " " . $this->container();
  }

  public function container(): string {
    return "bottles";
  }

  public function pronoun(): string {
    return "one";
  }

  public function quantity(): string {
    return (string)$this->number;
  }

  public function action(): string {
    return "Take " . $this->pronoun() . " down and pass it around, ";
  }

  public function successor(): BottleNumber {
    return BottleNumber::for($this->number - 1);
  }
}