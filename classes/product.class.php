<?php

// classe prodotto
class Product {
  // proprietà
  protected $price;
  protected $name;

  // costrutto
  public function __construct($_price, $_name) {
    $this->price = $_price;
    $this->name = $_name;
  }

  // metodi
  public function getPrice(): float
  {
		return $this->price;
	}

	public function getName(): string
  {
		return $this->name;
	}

}
?>