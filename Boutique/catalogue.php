<html>

<body>
<!-- Titre -->
<h1>Catalogue</h1>

<?php
include("functions.php");

$catalogue = [
  ['Nom'=>'IPhone SE', 'Prix' => '489€','img' => 'se.png'],
  ['Nom'=>'IPad Air', 'Prix' => '669€','img' => 'ipad.png'],
  ['Nom'=>'Apple Watch SE', 'Prix' => '299€','img' => 'applewatch.png'],
];
?>

<form method="post" action="basket.php">

<?php 
foreach ($catalogue as $sous_tableau) {
  displayItem($sous_tableau['Nom'],$sous_tableau['Prix'],$sous_tableau['img']); 
}
?>

Selectionnez les articles puis cliquez : <br>
<input type="submit" name="envoie" value="Ajouter au panier">
</form>

</body>
</html>