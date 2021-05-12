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

// istanze nebbook
$msiPrestige = new Netbook(1300, "MSI Prestige 15", 15, "32GB", "Windows-10", "Intel i7");
$hpPavillon = new Netbook(800, "HP Pavillon", 16, "8GB", "Windows-10", "Intel i5");

// istanze nebbook
$pinarello = new Bicycle(10000, "Pinarello Dogma", 54, "Corsa", 28);
$giant = new Bicycle(2500, "Giant", 56, "MTB", 29);

// arrays
$notebooks = [
  $msiPrestige,
  $hpPavillon,
];

$bicycles = [
  $pinarello,
  $giant,
];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <h1>Prodotti e-commerce</h1>

    <div class="container">
      <!-- stampa modelli netbook -->
      <div class="box_netbook">
        <!-- titolo -->
        <h2>Netbook:</h2>
        <!-- /titolo -->

        <?php foreach ($notebooks as $notebook) { ?>
          <h3>Modello: <?php echo $notebook->getName(); ?></h3>
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
      </div>
      <!-- /stampa modelli netbook -->

      <!-- stampa modelli Biciclette -->
      <div class="box_netbook">
        <!-- titolo -->
        <h2>Biciclette:</h2>
        <!-- /titolo -->

        <?php foreach ($bicycles as $bicycle) { ?>
          <h3>Modello: <?php echo $bicycle->getName(); ?></h3>
          <p>Proprietà:</p>
          <ul>
            <li>
              Prezzo: <?php echo $bicycle->getPrice(); ?>
            </li>
            <li>
              Tipologia: <?php echo $bicycle->getTypo() . " pollici"; ?>
            </li>
            <li>
              Misura ruote: <?php echo $bicycle->getWheelSize(); ?>
            </li>
          </ul>
        <?php } ?>
      </div>
      <!-- /stampa modelli Biciclette -->
    </div>

    
  </body>
</html>