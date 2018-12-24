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

		if($suche !== false) {
			echo 'Dieser Cocktail ist schon vorhanden';
		} else{
			if(!isset($_GET['alkoholgehalt'])) {
				echo "Sie haben vergessen den Alkoholgehalt anzugeben." . "<br>";
				echo "<a href='../cock_erfassen.php'>Zurück</a>";
			} elseif(!isset($_GET['cocktailgeschmack'])){
				echo "Es muss mindestens eine Geschmachsart angegeben werden.";
				echo "<a href='../cock_erfassen.php'>Zurück</a>";
			} elseif(!isset($_GET['cocktailglas'])){
				echo "Es muss mindestens ein Cocktailglas angegeben werden.";
				echo "<a href='../cock_erfassen.php'>Zurück</a>";
			} elseif(!isset($_GET['cocktailart'])){
				echo "Es muss ein Cocktailart angegeben werden.";
				echo "<a href='../cock_erfassen.php'>Zurück</a>";
			} elseif(!isset($_GET['dekoration'])){
				echo "Es muss mindestens eine Dekoration angegeben werden.";
				echo "<a href='../cock_erfassen.php'>Zurück</a>";
			} elseif(!isset($_GET['trinkanlass'])){
				echo "Es muss mindestens ein Trinkanlass angegeben werden.";
				echo "<a href='../cock_erfassen.php'>Zurück</a>";
			} else{
				
				$alkoholgehalt = $_GET['alkoholgehalt'];
				$statement = $conn->prepare($sql = "INSERT INTO `cocktail` (`ID`, `Name`, `Zubereitung`, `Alkohol`) VALUES (NULL, '$cocktailname', 'zubereitung', '$alkoholgehalt')");
				$statement->execute();
				
				/*------------------------------ Anlass und Cocktail verbinden ------------------------------*/
				foreach ($_GET['trinkanlass'] as $trinkanlass){
					
					$cocktail_ID_abfrage  = $conn->prepare("SELECT ID FROM `cocktail` WHERE `Name` LIKE '$cocktailname'");
					$cocktail_ID_abfrage->execute();
					$cocktail_ID = $cocktail_ID_abfrage->fetchColumn();/*Hier wird die ID des Cocktails gesucht*/

					
					$anlass_ID_abfragen = $conn->prepare("SELECT ID FROM `anlass` WHERE `Trinkanlass` LIKE '$trinkanlass'");
					$anlass_ID_abfragen->execute();
					$anlass_ID = $anlass_ID_abfragen->fetchColumn();
					echo $anlass_ID;
					
					$statement_anlass = $conn->prepare("INSERT INTO `cocktail_anlass` (`CocktailID`, `AnlassID`) VALUES ('$cocktail_ID', '$anlass_ID')"); //Entity mit Relation verbinden
					$statement_anlass->execute();
				}
				/*------------------------------ Anlass und Cocktail verbinden ------------------------------*/
				
				
				
				/*------------------------------ Geschmack und Cocktail verbinden ------------------------------*/
				foreach ($_GET['cocktailgeschmack'] as $cocktailgeschmack){
					
					$cocktail_ID_abfrage  = $conn->prepare("SELECT ID FROM `cocktail` WHERE `Name` LIKE '$cocktailname'");
					$cocktail_ID_abfrage->execute();
					$cocktail_ID = $cocktail_ID_abfrage->fetchColumn();	/*Hier wird die ID des Cocktails gesucht*/
					
					$geschmack_ID_abfragen = $conn->prepare("SELECT ID FROM `geschmack` WHERE `Geschmacksrichtung` LIKE '$cocktailgeschmack'");
					$geschmack_ID_abfragen->execute();
					$geschmack_ID = $geschmack_ID_abfragen->fetchColumn();	/*Hier werden die ID der Geschmäcker gesucht*/

					
					$statement_geschmack = $conn->prepare("INSERT INTO `cocktail_geschmack` (`CocktailID`, `GeschmackID`) VALUES ('$cocktail_ID', '$geschmack_ID')");
					$statement_geschmack->execute();	/*Relation zwischen Geschmack und Cocktail wird hergestellt.*/
				}
				/*------------------------------ Geschmack und Cocktail verbinden ------------------------------*/
				
				
				
				/*------------------------------ Glas und Cocktail verbinden ------------------------------*/
				foreach ($_GET['cocktailglas'] as $cocktailglas){
					
					$cocktail_ID_abfrage  = $conn->prepare("SELECT ID FROM `cocktail` WHERE `Name` LIKE '$cocktailname'");
					$cocktail_ID_abfrage->execute();
					$cocktail_ID = $cocktail_ID_abfrage->fetchColumn();	/*Hier wird die ID des Cocktails gesucht*/
					
					$glas_ID_abfragen = $conn->prepare("SELECT ID FROM `glas` WHERE `Glastyp` LIKE '$cocktailglas'");
					$glas_ID_abfragen->execute();
					$glas_ID = $glas_ID_abfragen->fetchColumn();	/*Hier werden die ID der Gläser gesucht*/

					
					$statement_glas = $conn->prepare("INSERT INTO `cocktail_glas` (`CocktailID`, `GlasID`) VALUES ('$cocktail_ID', '$glas_ID')");
					$statement_glas->execute();	/*Relation zwischen Glas und Cocktail wird hergestellt.*/
				}
				/*------------------------------ Glas und Cocktail verbinden ------------------------------*/
				
				
				
				/*------------------------------ Dekoration und Cocktail verbinden ------------------------------*/
				foreach ($_GET['dekoration'] as $dekoration){
					
					$cocktail_ID_abfrage  = $conn->prepare("SELECT ID FROM `cocktail` WHERE `Name` LIKE '$cocktailname'");
					$cocktail_ID_abfrage->execute();
					$cocktail_ID = $cocktail_ID_abfrage->fetchColumn();	/*Hier wird die ID des Cocktails gesucht*/
					
					$dekoration_ID_abfragen = $conn->prepare("SELECT ID FROM `einzeldeko` WHERE `Dekosorte` LIKE '$dekoration'");
					$dekoration_ID_abfragen->execute();
					$dekoration_ID = $dekoration_ID_abfragen->fetchColumn();	/*Hier werden die ID der Dekorationen gesucht*/

					
					$statement_deko = $conn->prepare("INSERT INTO `cocktail_einzeldeko` (`CocktailID`, `EinzeldekoID`) VALUES ('$cocktail_ID', '$dekoration_ID')");
					$statement_deko->execute();	/*Relation zwischen Dekoration und Cocktail wird hergestellt.*/
				}
				/*------------------------------ Dekoration und Cocktail verbinden ------------------------------*/
				
				
				
				/*------------------------------ Kategorie und Cocktail verbinden ------------------------------*/

				$cocktailart = $_GET['cocktailart'];
				$cocktail_ID_abfrage  = $conn->prepare("SELECT ID FROM `cocktail` WHERE `Name` LIKE '$cocktailname'");
				$cocktail_ID_abfrage->execute();
				$cocktail_ID = $cocktail_ID_abfrage->fetchColumn();	/*Hier wird die ID des Cocktails gesucht*/

				$cocktailart_ID_abfragen = $conn->prepare("SELECT ID FROM `kategorie` WHERE `Cocktailart` LIKE '$cocktailart'");
				$cocktailart_ID_abfragen->execute();
				$cocktailart_ID = $cocktailart_ID_abfragen->fetchColumn();	/*Hier werden die ID der Kategorie gesucht*/


				$statement_art = $conn->prepare("INSERT INTO `cocktail_kategorie` (`CocktailID`, `KategorieID`) VALUES ('$cocktail_ID', '$cocktailart_ID')");
				$statement_art->execute();	/*Relation zwischen Kategorie und Cocktail wird hergestellt.*/
				
				/*------------------------------ Kategorie und Cocktail verbinden ------------------------------*/
				
				
				/*------------------------------ Zutat einfügen ------------------------------*/
				$zutat = $_GET['zutat'];
				$einheit = $_GET['einheit'];
				$menge1 = $_GET['menge1'];
				/*------------------------------ Zutat einfügen ------------------------------*/
				echo "<h1>" . "Cocktail Erfolgreich in die Datenbank eingefügt!" . "</h1>" . "<br>";
				
			}
		}
	
		echo "<br>";
	
		?>
	</section>
</body>

<?php
include('module/footer.php')
?>