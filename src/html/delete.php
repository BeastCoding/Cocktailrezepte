<?php
include('module/header.php');
include('module/pdo_zugang.php');
?>

<body>
	<?php
	include('module/menu.php')
	?>
	<div class="space1"></div>
	<section id="hauptteil">
		<section id="hauptteil_schriftarten">
			<?php
			include('module/interfaceSQL.php');
			include('module/pdo_zugang.php');
			$dieser_cocktail_wird_geloescht = $_POST['delete'];
			//echo "<h1>" . $dieser_cocktail_wird_geloescht ."</h1>";
			deleteCocktail($dieser_cocktail_wird_geloescht); 	
			echo "<h1>" . 'Cocktail wurde gelöscht' . "</h1><br>";
			echo "<a href='rezepte.php'>Zurück</a>";
			
			/*
			$diese_zutat_wird_geloescht = "hear";
			deleteZutat($diese_zutat_wird_geloescht);
			*/
			?>
		</section>
	</section>
</body>

<?php
include('module/footer.php')
?>