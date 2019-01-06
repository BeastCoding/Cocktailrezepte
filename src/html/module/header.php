<?php
$page = $_SERVER['PHP_SELF'];
$title = 'default';
$indiv_css = 'default';
$gener_css = 'default';

// Choose title for the different pages
switch($page){
	case '/dashboard/cocktail/src/index.php':
		$title = 'Cocktails';
		$gener_css='css/general.css';
		$indiv_css='css/index.css';
		break;
	case '/dashboard/cocktail/src/html/cock_erfassen.php':
		$title = 'Erfassung';
		$gener_css='../css/general.css';
		$indiv_css='../css/cock_erfassen.css';
		break;
	case '/dashboard/cocktail/src/html/er-modell.php':
		$title = 'ER-Modell';
		$gener_css='../css/general.css';
		$indiv_css='../css/er-modell.css';
		break;
	case '/dashboard/cocktail/src/html/impressum.php':
		$title = 'Rechtshinweise';
		$gener_css='../css/general.css';
		$indiv_css='../css/impressum.css';
		break;
	case '/dashboard/cocktail/src/html/kontakt.php':
		$title = 'Kontakte';
		$gener_css='../css/general.css';
		$indiv_css='../css/kontakt.css';
		break;
	case '/dashboard/cocktail/src/html/rel_modell.php':
		$title = 'Relations Modell';
		$gener_css='../css/general.css';
		$indiv_css='../css/rel_modell.css';
		break;
	case '/dashboard/cocktail/src/html/rezepte.php':
		$title = 'Rezepte';
		$gener_css='../css/general.css';
		$indiv_css='../css/rezepte.css';
		break;
	case '/dashboard/cocktail/src/html/db_insert.php':
		$title = 'Erfassung';
		$gener_css='../css/general.css';
		$indiv_css='../css/cock_erfassen.css';
		break;
}

// header with individual title
echo '
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>'.$title.'</title>
		<link rel="stylesheet" href='.$indiv_css.'>
		<link rel="stylesheet" href='.$gener_css.'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
';
?>