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

// includo classe netbook
include_once __DIR__ . '/classes/netbook.class.php';

// includo classe netbook
include_once __DIR__ . '/classes/bicycle.class.php';

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
    <!-- titolo -->
    <h1>Prodotti e-commerce</h1>
    <!-- /titolo -->

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