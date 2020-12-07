<?php 
// Fonctions pour mes articles 
// Dans les "echo" j’affiche chaque noms, prix et images
function displayItem1(){
    $nom = "IPhone SE";
    $prix = "489€";
    $img = "se.png";
    echo $nom ; echo $prix ; echo $img;
}

function displayItem2(){
    $nom = "IPad Air";
    $prix = "669€";
    $img = "ipad.png";
    echo $nom ; echo $prix ; echo $img;
}

function displayItem3(){
    $nom = "Apple Watch SE";
    $prix = "299€";
    $img = "applewatch.png";
    echo $nom ; echo $prix ; echo $img;
}

// Fonction avec paramètres 
function displayItem($nom, $prix, $img){
    echo "<h2>" . $nom . "</h2>" ;
    echo "<h3>" . $prix . "</h3>";
    echo "<img src=" . $img . " style='height : 100px' >";
}
?>