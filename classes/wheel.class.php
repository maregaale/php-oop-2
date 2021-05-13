<?php 

// classe ruota
class Wheel extends Product {
  // proprietà
  protected $wheelSize;

	// costrutto
  public function __construct($_price, $_name, $_wheelSize) {

    parent::__construct($_price, $_name);

    $this->wheelSize = $_wheelSize;
  }

  // metodi
	public function getWheelSize(): int
  {
		return $this->wheelSize;
	}
}

?>