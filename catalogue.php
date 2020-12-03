<html>

<body>
<!-- Titre -->
<h1>Catalogue</h1>

<!-- Tableau + sous tableaux. Boucle foreach pour affichage simplifié -->
<!-- Dans les "echo" j’affiche chaque noms, prix et images de sous tableaux-->
<!-- Concatener H2 et H3 avec "echo", pour mise en page plus jolie -->

<?php
include("functions.php");
$catalogue = [
    ['Nom'=>'IPhone SE', 'Prix' => '489€','img' => 'se.png'],
    ['Nom'=>'IPad Air', 'Prix' => '669€','img' => 'ipad.png'],
    ['Nom'=>'Apple Watch SE', 'Prix' => '299€','img' => 'applewatch.png']
];

foreach ($catalogue as $sous_tableau) {
  displayItem($sous_tableau['Nom'],$sous_tableau['Prix'],$sous_tableau['img']);
  
}
?>

</body>
</html>