<?php

class BottleNumber {
  public static function for(int $number): BottleNumber {
    switch ($number) {
      case 0:
        $className = BottleNumber0::class;
        break;
      case 1:
        $className = BottleNumber1::class;
        break;
      case 6:
        $className = BottleNumber6::class;
        break;
      default:
        $className = BottleNumber::class;
        break;
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