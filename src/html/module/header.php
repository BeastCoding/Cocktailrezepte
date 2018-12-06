<?php
$page = $_SERVER['PHP_SELF'];
$title = 'default';

// Choose title for the different pages
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

// header with individual title
echo '
<!DOCTYPE HTML>
<html>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="module/general.css">
		<title>'.$title.'</title>
</html>
';
?>
