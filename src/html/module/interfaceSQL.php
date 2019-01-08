<?php

//function for select statement
function searchCocktail($select,$from,$where){
	$sqGe = "INNER JOIN cocktail_geschmack on cocktail.ID = cocktail_geschmack.CocktailID INNER JOIN geschmack on cocktail_geschmack.GeschmackID = geschmack.ID";
	$sqAn = "INNER JOIN cocktail_anlass on cocktail.ID = cocktail_anlass.CocktailID INNER JOIN anlass on cocktail_anlass.AnlassID = anlass.ID";
	$sqDe = "INNER JOIN cocktail_einzeldeko on cocktail.ID = cocktail_einzeldeko.CocktailID INNER JOIN einzeldeko on cocktail_einzeldeko.EinzeldekoID = einzeldeko.ID";
	$sqGL = "INNER JOIN cocktail_glas on cocktail.ID = cocktail_glas.CocktailID INNER JOIN glas on cocktail_glas.GlasID = glas.ID";
	$sqKa = "INNER JOIN cocktail_kategorie on cocktail.ID = cocktail_kategorie.CocktailID INNER JOIN anlass on cocktail_kategorie.KategorieID = kategorie.ID"
	$select = "SELECT cocktail.ID , cocktail.Name From cocktail"
	$where =  "WHERE"
	
}

?>
