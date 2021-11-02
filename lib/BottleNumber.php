<?php

class BottleNumber {
  public function __construct(int $number) {
    $this->number = $number;
  }

  public function __toString() {
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

  public function successor(): int {
    return $this->number - 1;
  }
}