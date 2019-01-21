<?php
include('module/header.php');
include('module/pdo_zugang.php');
?>

<body>
	<?php
	include('module/menu.php')
	?>
	<section id="hauptteil">
		<?php
		
		$cocktailname = $_GET['cocktailname'];
		$statement = $conn->prepare("SELECT *  FROM `cocktail` WHERE `Name` LIKE '$cocktailname'");
		$statement->execute(array('Name' => $cocktailname));
		$suche = $statement->fetch();
		$anzahl_zutat = sizeof($_GET["zutat"]);
		//echo $anzahl_zutat;
		if($suche !== false) {
			echo "<h1>" . 'Dieser Cocktail ist schon vorhanden' . "</h1>";
		} else{
			if(!isset($_GET['alkoholgehalt'])) {
				echo "<div class='meldung'>" . 'Sie haben vergessen den Alkoholgehalt anzugeben.' . "</div>";
				echo "<div class='zurueck'><a href='cock_erfassen.php'>Zurück</a></div>";
			} elseif(!isset($_GET['cocktailgeschmack'])){
				echo "<div class='meldung'>" . 'Es muss mindestens eine Geschmacksart angegeben werden.' . "</div>";
				echo "<div class='zurueck'><a href='cock_erfassen.php'>Zurück</a></div>";
			} elseif(!isset($_GET['cocktailglas'])){
				echo "<div class='meldung'>" . 'Es muss mindestens ein Cocktailglas angegeben werden.' . "</div>";
				echo "<div class='zurueck'><a href='cock_erfassen.php'>Zurück</a></div>";
			} elseif(!isset($_GET['cocktailart'])){
				echo "<div class='meldung'>" . 'Es muss ein Cocktailart angegeben werden.' . "</div>";
				echo "<div class='zurueck'><a href='cock_erfassen.php'>Zurück</a></div>";
			} elseif(!isset($_GET['dekoration'])){
				echo "<div class='meldung'>" . 'Es muss mindestens eine Dekoration angegeben werden.' . "</div>";
				echo "<div class='zurueck'><a href='cock_erfassen.php'>Zurück</a></div>";
			} elseif(!isset($_GET['trinkanlass'])){
				echo "<div class='meldung'>" . 'Es muss mindestens ein Trinkanlass angegeben werden.' . "</div>";
				echo "<div class='zurueck'><a href='cock_erfassen.php'>Zurück</a></div>";
			} elseif($anzahl_zutat < 0){
				echo "<div class='meldung'>" . 'Bitte mindestens eine Zutat eingeben!' . "</div>";
				echo "<div class='zurueck'><a href='cock_erfassen.php'>Zurück</a></div>";
			} else{
				
				$zubereitung = $_GET['Zubereitung'];
				$alkoholgehalt = $_GET['alkoholgehalt'];
				$statement = $conn->prepare($sql = "INSERT INTO `cocktail` (`ID`, `Name`, `Zubereitung`, `Alkohol`) VALUES (NULL, '$cocktailname', '$zubereitung', '$alkoholgehalt')");
				$statement->execute();
				
				$cocktail_ID_abfrage  = $conn->prepare("SELECT ID FROM `cocktail` WHERE `Name` LIKE '$cocktailname'");
				$cocktail_ID_abfrage->execute();
				$cocktail_ID = $cocktail_ID_abfrage->fetchColumn();/*Hier wird die ID des Cocktails gesucht*/
				
				/*------------------------------ Anlass und Cocktail verbinden ------------------------------*/
				
				foreach ($_GET['trinkanlass'] as $trinkanlass){		
					$statement_anlass = $conn->prepare("INSERT INTO `cocktail_anlass` (`CocktailID`, `AnlassID`) VALUES ('$cocktail_ID', '$trinkanlass')"); //Entity mit Relation verbinden
					$statement_anlass->execute();
				}
				
				/*------------------------------ Anlass und Cocktail verbinden ------------------------------*/
				
				
				
				/*------------------------------ Geschmack und Cocktail verbinden ------------------------------*/
				
				foreach ($_GET['cocktailgeschmack'] as $cocktailgeschmack){					
					$statement_geschmack = $conn->prepare("INSERT INTO `cocktail_geschmack` (`CocktailID`, `GeschmackID`) VALUES ('$cocktail_ID', '$cocktailgeschmack')");
					$statement_geschmack->execute();	/*Relation zwischen Geschmack und Cocktail wird hergestellt.*/
				}
				
				/*------------------------------ Geschmack und Cocktail verbinden ------------------------------*/
				
				
				
				/*------------------------------ Glas und Cocktail verbinden ------------------------------*/
				
				foreach ($_GET['cocktailglas'] as $cocktailglas){
					$statement_glas = $conn->prepare("INSERT INTO `cocktail_glas` (`CocktailID`, `GlasID`) VALUES ('$cocktail_ID', '$cocktailglas')");
					$statement_glas->execute();	/*Relation zwischen Glas und Cocktail wird hergestellt.*/
				}
				
				/*------------------------------ Glas und Cocktail verbinden ------------------------------*/
				
				
				
				/*------------------------------ Dekoration und Cocktail verbinden ------------------------------*/
				
				foreach ($_GET['dekoration'] as $dekoration){					
					$statement_deko = $conn->prepare("INSERT INTO `cocktail_einzeldeko` (`CocktailID`, `EinzeldekoID`) VALUES ('$cocktail_ID', '$dekoration')");
					$statement_deko->execute();	/*Relation zwischen Dekoration und Cocktail wird hergestellt.*/
				}
				
				/*------------------------------ Dekoration und Cocktail verbinden ------------------------------*/
				
				
				
				/*------------------------------ Kategorie und Cocktail verbinden ------------------------------*/
				
				$cocktailart = $_GET['cocktailart'];
				$statement_art = $conn->prepare("INSERT INTO `cocktail_kategorie` (`CocktailID`, `KategorieID`) VALUES ('$cocktail_ID', '$cocktailart')");
				$statement_art->execute();	/*Relation zwischen Kategorie und Cocktail wird hergestellt.*/
				
				/*------------------------------ Kategorie und Cocktail verbinden ------------------------------*/
				
				
				/*------------------------------ Zutaten ------------------------------*/
				
				for($i=0; $i<$anzahl_zutat ;$i++){
					$zutat  = $_GET['zutat'][$i];
					$einheit = $_GET['einheit'][$i];
					$menge = $_GET['menge'][$i];
					
					$zutat_abfrage = $conn->prepare("SELECT *  FROM `zutat` WHERE `Name` LIKE '$zutat'");
					$zutat_abfrage->execute(array('Name' => $zutat));
					$suche_zutat = $zutat_abfrage->fetch();
					if($suche_zutat == false) {
						/*------------------------------ Zutaten einfügen ------------------------------*/
						$statement_zutat_einfügen = $conn->prepare("INSERT INTO `zutat` (`Name`,`Einheit`) VALUES ('$zutat', '$einheit')");
						$statement_zutat_einfügen->execute();	/*Zutat einfügen wenn nicht vorhanden.*/
						
						/*------------------------------ Zutaten und Cocktail verbinden ------------------------------*/
						$cocktail_ID_abfrage  = $conn->prepare("SELECT ID FROM `cocktail` WHERE `Name` LIKE '$cocktailname'");
						$cocktail_ID_abfrage->execute();
						$cocktail_ID = $cocktail_ID_abfrage->fetchColumn();	/*Hier wird die ID des Cocktails gesucht*/

						$zutat_ID_abfragen = $conn->prepare("SELECT ID FROM `zutat` WHERE `Name` LIKE '$zutat'");
						$zutat_ID_abfragen->execute();
						$zutat_ID = $zutat_ID_abfragen->fetchColumn();	/*Hier werden die ID der Zutaten gesucht*/


						$statement_zutat = $conn->prepare("INSERT INTO `cocktail_zutat` (`CocktailID`, `ZutatID`, `Menge`) VALUES ('$cocktail_ID', '$zutat_ID', '$menge')");
						$statement_zutat->execute();	/*Relation zwischen Dekoration und Cocktail wird hergestellt.*/
						/*------------------------------ Zutaten und Cocktail verbinden ------------------------------*/
						
						/*------------------------------ Zutaten einfügen ------------------------------*/
					}
					else{
						
						/*------------------------------ Zutaten und Cocktail verbinden ------------------------------*/

						$zutat_ID_abfragen = $conn->prepare("SELECT ID FROM `zutat` WHERE `Name` LIKE '$zutat'");
						$zutat_ID_abfragen->execute();
						$zutat_ID = $zutat_ID_abfragen->fetchColumn();	/*Hier werden die ID der Zutaten gesucht*/

						$statement_zutat = $conn->prepare("INSERT INTO `cocktail_zutat` (`CocktailID`, `ZutatID`, `Menge`) VALUES ('$cocktail_ID', '$zutat_ID', '$menge')");
						$statement_zutat->execute();	/*Relation zwischen Dekoration und Cocktail wird hergestellt.*/
						
						/*------------------------------ Zutaten und Cocktail verbinden ------------------------------*/
					}
				}
				
				/*------------------------------ Zutaten ------------------------------*/
				
				
								
				/*------------------------------ Success ------------------------------*/
				
				echo "<h1>" . "Cocktail Erfolgreich in die Datenbank eingefügt!" . "</h1>" . "<br>";
				
				/*------------------------------ Success ------------------------------*/
				
			}
		}
	
		echo "<br>";
	
		?>
	</section>
</body>

<?php
include('module/footer.php')
?>