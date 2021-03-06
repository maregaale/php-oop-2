<?php
// includo classe prodotto
include_once __DIR__ . '/classes/product.class.php';

// includo classe netbook
include_once __DIR__ . '/classes/netbook.class.php';

// includo classe ruote
include_once __DIR__ . '/classes/wheel.class.php';

// includo classe biciclette
include_once __DIR__ . '/classes/bicycle.class.php';



// ISTANZE
// istanze netbook
$msiPrestige = new Netbook(1300, "MSI Prestige 15", 15, "32GB", "Windows-10", "Intel i7");
$hpPavillon = new Netbook(800, "HP Pavillon", 16, "8GB", "Windows-10", "Intel i5");

// istanze ruote
$mavic = new Wheel(500, "Mavic Ksyrium", 28);
$fulcrum = new Wheel(300, "Fulcrum", 29);

// istanze biciclette
$pinarello = new Bicycle(10000, "Pinarello Dogma", 54, "Corsa", $mavic);
$giant = new Bicycle(2500, "Giant", 56, "MTB", $fulcrum);


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
              Prezzo: <?php echo $notebook->getPrice() . " €"; ?>
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
              Prezzo: <?php echo $bicycle->getPrice() . " €"; ?>
            </li>
            <li>
              Tipologia: <?php echo $bicycle->getTypo(); ?>
            </li>
            <li>
              Misura ruote: <?php echo $bicycle->getWheel()->getWheelSize() . " pollici"; ?>
            </li>
            <li>
              Modello ruote: <?php echo $bicycle->getWheel()->getName(); ?>
            </li>
          </ul>
        <?php } ?>
      </div>
      <!-- /stampa modelli Biciclette -->
    </div>
  </body>
</html>