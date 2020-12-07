<html>
<head>

</head>
<body>

<?php
// variables de mon artcile
$nom = "Casque";
$prix = "449€";
$img = "casque.png";

?>

<!-- mon dollar post qui récupère les données de mon article -->
<p> 
<?php 

 if (isset($_POST["nom"]) AND isset($_POST["prix"]))
 {
    echo "<h1>" . ($_POST["nom"]) . "</h1>" ; 
    echo "<h2>" . ($_POST["prix"]) .  "</h2>" ;
    }
 else {
    echo 'Merci de compléter tous les champs !';
    }

?>
</p>

<img src="<?php echo $img ?>" width ="200" alt="ordi">
</body>

</html>