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

                $cBox = array();
                if(!empty( $_POST['geschmack'])){
                    $gesch = array_merge(array("geschmack"), $_POST['geschmack']);
                    array_push($cBox,$gesch);
                }
                if(!empty( $_POST['glas'])){
                    $glas = array_merge(array("glas"), $_POST['glas']);
                    array_push($cBox,$glas);
                }
                if(!empty( $_POST['kategorie'])){
                    $kat = array_merge(array("kategorie"), $_POST['kategorie']);
                    array_push($cBox,$kat);
                }
                if(!empty( $_POST['einzeldeko'])){
                    $deko = array_merge(array("einzeldeko"), $_POST['einzeldeko']);
                    array_push($cBox,$deko);
                }
                if(!empty( $_POST['anlass'])){
                     $anlass  = array_merge(array("anlass"), $_POST['anlass']);
                     array_push($cBox,$anlass);
                }
                if(!empty( $_POST['cocktail'])){
                     $cocktail  = array_merge(array("cocktail"), $_POST['cocktail']);
                     array_push($cBox,$cocktail);
                }
                updateEigenschaft($cID, $cBox);
                ?>
                <div>Cocktail erfolgreich geändert</div>
			</section>

		</section>
	</body>
<?php
include('module/footer.php')
?>
