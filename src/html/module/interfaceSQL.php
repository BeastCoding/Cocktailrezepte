<?php

//Datenbank Abfrage für die Cocktailsuche
function searchCocktail($cBox,$search){
	include('module/pdo_zugang.php');
	$sqGe = "INNER JOIN cocktail_geschmack on cocktail.ID = cocktail_geschmack.CocktailID INNER JOIN geschmack on cocktail_geschmack.GeschmackID = geschmack.ID";
	$sqAn = "INNER JOIN cocktail_anlass on cocktail.ID = cocktail_anlass.CocktailID INNER JOIN anlass on cocktail_anlass.AnlassID = anlass.ID";
	$sqDe = "INNER JOIN cocktail_einzeldeko on cocktail.ID = cocktail_einzeldeko.CocktailID INNER JOIN einzeldeko on cocktail_einzeldeko.EinzeldekoID = einzeldeko.ID";
	$sqGl = "INNER JOIN cocktail_glas on cocktail.ID = cocktail_glas.CocktailID INNER JOIN glas on cocktail_glas.GlasID = glas.ID";
	$sqKa = "INNER JOIN cocktail_kategorie on cocktail.ID = cocktail_kategorie.CocktailID INNER JOIN kategorie on cocktail_kategorie.KategorieID = kategorie.ID";
	$sqZu = "INNER JOIN cocktail_zutat on cocktail.ID = cocktail_zutat.CocktailID INNER JOIN zutat on cocktail_zutat.ZutatID = zutat.ID";
	$select = "SELECT cocktail.ID , cocktail.Name FROM cocktail";
	$where =  " WHERE cocktail.Name REGEXP '.*".$search.".*'";

	foreach($cBox as $row){
		switch($row[0]){
			case "geschmack":
				$select = $select." ".$sqGe;
				break;
			case "glas":
				$select = $select." ".$sqGl;
				break;
			case "kategorie":
				$select = $select." ".$sqKa;
				break;
			case "einzeldeko":
				$select =$select." ".$sqDe;
				break;
			case "anlass":
				$select =$select." ".$sqAn;
				break;
			}
		for ($i = 1;$i < sizeof($row); $i++) {
			$where = $where." AND ".$row[0].".ID = ".$row[$i];
		}
	}
	$select = $select.$where;
	//echo $select;
	$res = array();
	foreach ($conn->query($select) as $element) {
		$res[$element[0]][] = $element[1];
    }
	return $res;

}

function searchZutat($search){
	include('module/pdo_zugang.php');
	$res = null;
	$sql = "SELECT zutat.ID, zutat.Name FROM zutat WHERE zutat.Name REGEXP '.*".$search.".*'";
	foreach ($conn->query($sql) as $element) {
		$res[$element[0]][] = $element[1];
    }
	return $res;
}

?>
