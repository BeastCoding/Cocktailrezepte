<?php

//Datenbank Abfrage für die Cocktailsuche
function searchCocktail($cBox,$search){
	include('module/pdo_zugang.php');
	include('module/sqlstat.php');

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
			if(strcmp($row[0], "cocktail") == 0){
				$where = $where." AND ".$row[0].".Alkohol = '".$row[$i]."'";
			}else{
				$where = $where." AND ".$row[0].".ID = ".$row[$i];
			}

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



function getCocktail($id){
	include('module/pdo_zugang.php');
	include('module/sqlstat.php');
	$sql = $conn->prepare("SELECT * FROM cocktail WHERE cocktail.ID = ".$id);
	$sql -> execute();
	$res = $sql->fetchAll();
	return $res;
}

function getZutat($id){
	include('module/pdo_zugang.php');
	include('module/sqlstat.php');
	$sql = $conn->prepare("SELECT * FROM cocktail WHERE cocktail.ID = ".$id);
	$sql -> execute();
	$res = $sql->fetchAll();
	return $res;
}
function getAnlass($id){
	include('module/pdo_zugang.php');
	include('module/sqlstat.php');
	$sql = $conn->prepare("SELECT anlass.ID, anlass.Trinkanlass FROM cocktail_anlass INNER JOIN anlass on cocktail_anlass.AnlassID = anlass.ID WHERE cocktail_anlass.CocktailID = ".$id);
	$sql -> execute();
	$res = $sql->fetchAll();
	return $res;
}
function getDeko($id){
	include('module/pdo_zugang.php');
	include('module/sqlstat.php');
	$sql = $conn->prepare("SELECT einzeldeko.ID, einzeldeko.Dekosorte FROM cocktail_einzeldeko INNER JOIN einzeldeko on cocktail_einzeldeko.EinzeldekoID = einzeldeko.ID WHERE cocktail_einzeldeko.CocktailID = ".$id);
	$sql -> execute();
	$res = $sql->fetchAll();
	return $res;
}
function getGeschmack($id){
	include('module/pdo_zugang.php');
	include('module/sqlstat.php');
	$sql = $conn->prepare("SELECT geschmack.ID, geschmack.Geschmacksrichtung FROM cocktail_geschmack INNER JOIN geschmack on cocktail_geschmack.GeschmackID = geschmack.ID WHERE cocktail_geschmack.CocktailID = ".$id);
	$sql -> execute();
	$res = $sql->fetchAll();
	return $res;
}
function getGlas($id){
	include('module/pdo_zugang.php');
	include('module/sqlstat.php');
	$sql = $conn->prepare("SELECT glas.ID, glas.Glastyp FROM cocktail_glas INNER JOIN glas on cocktail_glas.GlasID = glas.ID WHERE cocktail_glas.CocktailID = ".$id);
	$sql -> execute();
	$res = $sql->fetchAll();
	return $res;
}
function getKategorie($id){
	include('module/pdo_zugang.php');
	include('module/sqlstat.php');
	$sql = $conn->prepare("SELECT kategorie.ID, kategorie.Cocktailart FROM cocktail_kategorie INNER JOIN kategorie on cocktail_kategorie.KategorieID = kategorie.ID WHERE cocktail_kategorie.CocktailID = ".$id);
	$sql -> execute();
	$res = $sql->fetchAll();
	return $res;
}




function deleteCocktail($dieser_cocktail_wird_geloescht){
	include('module/pdo_zugang.php');
	/*----------------------------- ID von Cocktail wird hier gesucht und in $cocktail_ID gespeichert ---------------------------------------*/
	$cocktail_ID_abfrage  = $conn->prepare("SELECT ID FROM `cocktail` WHERE `Name` LIKE '$dieser_cocktail_wird_geloescht'");
	$cocktail_ID_abfrage->execute();
	$cocktail_ID = $cocktail_ID_abfrage->fetchColumn();
	/*----------------------------- Wenn ID direkt in die funktion eingegeben wird einfach in $cocktail_ID einsetzen ------------------------*/
	$delete_statement = $conn->prepare("DELETE FROM `cocktail_anlass` WHERE `cocktail_anlass`.`CocktailID` LIKE '$cocktail_ID'");
	$delete_statement->execute();
	$delete_statement = $conn->prepare("DELETE FROM `cocktail_einzeldeko` WHERE `cocktail_einzeldeko`.`CocktailID` LIKE '$cocktail_ID'");
	$delete_statement->execute();
	$delete_statement = $conn->prepare("DELETE FROM `cocktail_geschmack` WHERE `cocktail_geschmack`.`CocktailID` LIKE '$cocktail_ID'");
	$delete_statement->execute();
	$delete_statement = $conn->prepare("DELETE FROM `cocktail_glas` WHERE `cocktail_glas`.`CocktailID` LIKE '$cocktail_ID'");
	$delete_statement->execute();
	$delete_statement = $conn->prepare("DELETE FROM `cocktail_kategorie` WHERE `cocktail_kategorie`.`CocktailID` LIKE '$cocktail_ID'");
	$delete_statement->execute();
	$delete_statement = $conn->prepare("DELETE FROM `cocktail_zutat` WHERE `cocktail_zutat`.`CocktailID` LIKE '$cocktail_ID'");
	$delete_statement->execute();
	$delete_statement = $conn->prepare("DELETE FROM `cocktail` WHERE `cocktail`.`ID` = '$cocktail_ID'");
	$delete_statement->execute();
}

function deleteZutat($diese_zutat_wird_geloescht){
	include('module/pdo_zugang.php');
	$delete_zutat_statement = $conn->prepare("DELETE FROM `zutat` WHERE `zutat`.`Name` LIKE '$diese_zutat_wird_geloescht'");
	$delete_zutat_statement->execute();
}

?>
