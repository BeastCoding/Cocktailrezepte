<?php
$page = $_SERVER['PHP_SELF'];
$title = 'default';
switch($page){
	case '/dashboard/cocktail/src/index.php': 
		$title = 'Cocktails'; 
		break;
	case '/dashboard/cocktail/src/html/cock_erfassen.php': 
		$title = 'Erfassung'; 
		break;
	case '/dashboard/cocktail/src/html/er-modell.php': 
		$title = 'ER-Modell'; 
		break;
	case '/dashboard/cocktail/src/html/impressum.php': 
		$title = 'Impressum'; 
		break;
	case '/dashboard/cocktail/src/html/kontakt.php': 
		$title = 'Kontakte'; 
		break;
	case '/dashboard/cocktail/src/html/rel_modell.php': 
		$title = 'Relations Modell'; 
		break;
	case '/dashboard/cocktail/src/html/rezepte.php': 
		$title = 'Rezepte'; 
		break;	
}
echo '
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">';
echo '
<title>'.$title.'</title>
';
echo '
<!--hier die style.css für alle html Seiten.-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
';
?>