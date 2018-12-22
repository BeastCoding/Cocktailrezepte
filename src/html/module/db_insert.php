<?php
$cocktailname = $_GET['cocktailname'];
$zutat = $_GET['zutat'];
$einheit = $_GET['einheit'];
$menge1 = $_GET['menge1'];
$cocktailart = $_GET['cocktailart'];
$alkoholgehalt = $_GET['alkoholgehalt'];

echo $cocktailname . "<br>" . $zutat . "<br>" . $menge1 . " " . $einheit . "<br>" . $cocktailart . "<br>" . $alkoholgehalt . "<br>";

echo "Dieses Cocktail schmeckt: ";
foreach ($_GET['cocktailgeschmack'] as $cocktailgeschmack)
	echo $cocktailgeschmack . ", ";

echo "<br>";

echo "Dieses Cocktail kann in folgenden Gläsern serviert werden: ";
foreach ($_GET['cocktailglas'] as $cocktailglas)
	echo $cocktailglas . ", ";

echo "<br>";

echo "Dieses Cocktail kann mit folgenden Dekorationen serviert werden: ";
foreach ($_GET['dekoration'] as $dekoration)
	echo $dekoration . ", ";

echo "<br>";

echo "Dieses Cocktail kann zu folgenden Anlässen serviert werden: ";
foreach ($_GET['trinkanlass'] as $trinkanlass)
	echo $trinkanlass . ", ";
?>