<html>
<head>

</head>
<body>

<?php
// variables de mon artcile
$nom = "Casque";
$prix = "449€";
$img = "casque.png";
echo "<h2>" .  $nom . "</h3>"; 
echo "<h3>" . $prix . "</h3>"; 
?>

<!-- mon dollar post qui récupère les données de mon article -->
<p> <?php echo $_post['nom'] ; ?></p>

<img src="<?php echo $img ?>" width ="200" alt="ordi">
</body>

</html>