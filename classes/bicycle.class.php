<?php 

// classe bicicletta
class Bicycle extends Product {
  // proprietà
  protected $size;
  protected $typo;
  protected $wheelSize;

	  // costrutto
  public function __construct($_price, $_name, $_size, $_typo, $_wheelSize) {

    parent::__construct($_price, $_name);

    $this->size = $_size;
    $this->typo = $_typo;
    $this->wheelSize = $_wheelSize;
  }

  // metodi
  public function getSize() {
		return $this->size;
	}

	public function getTypo() {
		return $this->typo;
	}

	public function getWheelSize() {
		return $this->wheelSize;
	}
}

// istanze biciclette
$pinarello = new Bicycle(10000, "Pinarello Dogma", 54, "Corsa", 28);
$giant = new Bicycle(2500, "Giant", 56, "MTB", 29);
?>