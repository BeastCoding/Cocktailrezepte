# controller for SQL/Html control
<?php
include ("interface_SQL.php");


//Verbindungsaufbau
$con = mysqli_connect("localhost", "Nutzername", "Passwort", "Datenbank");
//Test, ob Verbindung aufgebaut wurde
if (!$con) {
echo "Verbindung fehlgeschlagen!";
exit;
}
else {
echo "Verbindung erfolgreich aufgebaut";
}

// Join of Cocktail and Zutat
function get_Cocktail($name){
	$query = "
	SELECT Cocktail.Name, 
		Cocktail.Zubereitung, 
		Cocktail.Alkohol,
		Cocktail_Zutat.Menge,
		Zutat.Name,
		Zutat.Einheit,
		Zutat.Kalorien
	FROM(
		Cocktail_Zutat
	INNER JOIN 
		Zutat
	ON
		Cocktail_Zutat.ZutatID = Zutat.ID)
	INNER JOIN 
		Cocktail
	ON
		Cocktail_Zutat.CocktailID = Cocktail.ID
	WHERE
		Cocktail.Name ="+ $name;
	$res = mysqli_query($con, $query);
	return mysqli_fetch_assoc($res);
}


// fetches Zutat of a specific name
function get_Zutat($name){
	$select = "Name, Einheit, Kalorien";
	$where = "Name ="+$ name;
	return select_SQL($select,"Zutat", $where);
	
}



mysqli_close($con);
?>