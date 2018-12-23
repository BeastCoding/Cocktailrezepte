<?php
include('header.php');
include('pdo_zugang.php');
?>

<body>
	<?php
	include('menu.php')
	?>
	<section id="hauptteil">
		<?php

		$zutat = $_GET['zutat'];
		$einheit = $_GET['einheit'];
		$menge1 = $_GET['menge1'];
		//$cocktailart = $_GET['cocktailart'];



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
				echo "<h1>" . "Cocktail Erfolgreich in die Datenbank eingefügt!" . "</h1>" . "<br>";
				
			}
		}


		/*------------------------------ Geschmack call ------------------------------*/
		if(isset($_GET['cocktailgeschmack'])) {
			echo "Dieses Cocktail schmeckt: ";
				foreach ($_GET['cocktailgeschmack'] as $cocktailgeschmack)
					echo $cocktailgeschmack . ", ";
		}
		/*------------------------------ Geschmack call ------------------------------*/	


		echo "<br>";


		/*------------------------------ Glas call ------------------------------*/
		if(isset($_GET['cocktailglas'])) {
			echo "Dieses Cocktail kann in folgenden Gläsern serviert werden: ";
				foreach ($_GET['cocktailglas'] as $cocktailglas)
					echo $cocktailglas . ", ";
		}
		/*------------------------------ Glas call ------------------------------*/

		echo "<br>";

		/*------------------------------ Dekoration call ------------------------------*/
		if(isset($_GET['dekoration'])) {
			echo "Dieses Cocktail kann mit folgenden Dekorationen serviert werden: ";
				foreach ($_GET['dekoration'] as $dekoration)
					echo $dekoration . ", ";
		}
		/*------------------------------ Dekoration call ------------------------------*/

		echo "<br>";

		/*------------------------------ Anlass call ------------------------------*/
		if(isset($_GET['trinkanlass'])) {
			echo "Dieses Cocktail kann zu folgenden Anlässen serviert werden: ";
				foreach ($_GET['trinkanlass'] as $trinkanlass)
					echo $trinkanlass . ", ";
		}
		/*------------------------------ Anlass call ------------------------------*/

				/**/
		?>
	</section>
</body>

<?php
include('footer.php')
?>