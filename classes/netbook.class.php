<?php 

// classe netbook
class Netbook extends Product {
  // proprietà
  protected $displaySize;
  protected $ram;
  protected $operatingSystem;
  protected $processor;

	  // costrutto
  public function __construct($_price, $_name, $_displaySize, $_ram, $_operatingSystem, $_processor) {

    parent::__construct($_price, $_name);

    $this->displaySize = $_displaySize;
    $this->ram = $_ram;
    $this->operatingSystem = $_operatingSystem;
    $this->processor = $_processor;
  }

  // metodi
  public function getDisplaySize() {
		return $this->displaySize;
	}

	public function getRam() {
		return $this->ram;
	}

	public function getOperatingSystem() {
		return $this->operatingSystem;
	}

	public function getProcessor() {
		return $this->processor;
	}

}

// istanze netbook
$msiPrestige = new Netbook(1300, "MSI Prestige 15", 15, "32GB", "Windows-10", "Intel i7");
$hpPavillon = new Netbook(800, "HP Pavillon", 16, "8GB", "Windows-10", "Intel i5");
?>
