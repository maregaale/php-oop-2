<?php

// classe prodotto
class Product {
  protected $price;
  protected $name;

  // costrutto
  public function __construct($_price, $_name) {
    $this->price = $_price;
    $this->name = $_name;
  }
}

?>