<?php
include('module/header.php');
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
                $cID = $_POST['cocktail_ID'];
                $cName = $_POST['cocktail_Name'];
                $cZub = $_POST['cocktail_Zub'];
                $zName = $_POST['zutat'];
                $zMenge = $_POST['menge'];

                print_r($zName);
                updateCocktail($cID, $cName, $cZub);
                for ($i=0; $i < count($zName); $i++) {
                    updateZutat($cID, $zName[$i], $zMenge[$i]);
                }

                ?>
			</section>

		</section>
	</body>
<?php
include('module/footer.php')
?>
