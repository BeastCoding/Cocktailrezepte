<?php
$sqGe = "INNER JOIN cocktail_geschmack on cocktail.ID = cocktail_geschmack.CocktailID INNER JOIN geschmack on cocktail_geschmack.GeschmackID = geschmack.ID";
$sqAn = "INNER JOIN cocktail_anlass on cocktail.ID = cocktail_anlass.CocktailID INNER JOIN anlass on cocktail_anlass.AnlassID = anlass.ID";
$sqDe = "INNER JOIN cocktail_einzeldeko on cocktail.ID = cocktail_einzeldeko.CocktailID INNER JOIN einzeldeko on cocktail_einzeldeko.EinzeldekoID = einzeldeko.ID";
$sqGl = "INNER JOIN cocktail_glas on cocktail.ID = cocktail_glas.CocktailID INNER JOIN glas on cocktail_glas.GlasID = glas.ID";
$sqKa = "INNER JOIN cocktail_kategorie on cocktail.ID = cocktail_kategorie.CocktailID INNER JOIN kategorie on cocktail_kategorie.KategorieID = kategorie.ID";
$sqZu = "INNER JOIN cocktail_zutat on cocktail.ID = cocktail_zutat.CocktailID INNER JOIN zutat on cocktail_zutat.ZutatID = zutat.ID";
?>
