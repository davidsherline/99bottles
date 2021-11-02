<?php

class BottleNumber0 extends BottleNumber {
  public function quantity(): string {
    return "no more";
  }

  public function action(): string {
    return "Go to the store and buy some more, ";
  }

  public function successor(): parent {
    return parent::for(99);
  }
}