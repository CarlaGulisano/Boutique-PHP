<html>
<body>
<!-- Variables $ nom, prix et image + echo (affichage)-->
<?php

$nom = "MacBook Pro";
echo $nom;
$prix = "1449€";
echo $prix;
$img = "macbook.png";
echo $img ;
?>
<!-- source image html -->
<img src="<?php echo $img ?>" width ="200" alt="ordi">
</body>
</html>