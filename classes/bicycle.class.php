<?php 

// classe bicicletta
class Bicycle extends Product {
  // proprietà
  protected $size;
  protected $typo;
  protected $wheel;


	// costrutto
  public function __construct($_price, $_name, $_size, $_typo, $_wheel) {

    parent::__construct($_price, $_name);

    $this->size = $_size;
    $this->typo = $_typo;
    $this->wheel = $_wheel;
  }

  // metodi
  public function getSize(): int
  {
		return $this->size;
	}

	public function getTypo(): string
  {
		return $this->typo;
	}

	public function getWheel() {
		return $this->wheel;
	}
}

?>