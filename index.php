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
  public function getPrice() {
		return $this->price;
	}

	public function getName() {
		return $this->name;
	}

}

// classe computer
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

// istanze nebbook
$msiPrestige = new Netbook(1300, "MSI Prestige 15", 15, "32GB", "Windows-10", "Intel i7");
$hpPavillon = new Netbook(800, "HP Pavillon", 16, "8GB", "Windows-10", "Intel i5");


// array
$notebooks = [
  $msiPrestige,
  $hpPavillon,
];


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
  </head>
  <body>

    <!-- stampa modelli netbook -->
    <?php foreach ($notebooks as $notebook) { ?>
      <h2>Modello: <?php echo $notebook->getName(); ?></h2>
      <p>Proprietà:</p>
      <ul>
        <li>
          Prezzo: <?php echo $notebook->getPrice(); ?>
        </li>
        <li>
          Schermo: <?php echo $notebook->getDisplaySize() . " pollici"; ?>
        </li>
        <li>
          RAM: <?php echo $notebook->getRam(); ?>
        </li>
        <li>
          Processore: <?php echo $notebook->getProcessor(); ?>
        </li>
      </ul>
    <?php } ?>
    <!-- /stampa modelli netbook -->
  </body>
</html>