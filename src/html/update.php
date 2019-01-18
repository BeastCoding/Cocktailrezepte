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
                    include ('module/interfaceSQL.php');
					$cID = $_POST['update'];
					$cocktails = getCocktail($cID);
					$zutat = getZutat($cID);
					$anlass = getAnlass($cID);
					$deko = getDeko($cID);
					$geschmack = getGeschmack($cID);
					$glas = getGlas($cID);
					$kat = getKategorie($cID);

					/* -------------------------Cocktail------------------------------*/
                    echo "
        				<div>
                            <div class=cocktail_Name> ";
					echo	"<input type='text' id='cocktail_Name' value='".$cocktails[0]['Name']."'>";
					echo	"</div>";



					/* -------------------------Zutaten------------------------------*/
                    echo "<div class='zutaten'>";
					echo "<div class='zutatHead'>Zutaten</div><br>";
					if(!empty($zutat)){
						foreach ($zutat as $key) {
                            echo "<div>";
							echo "<label>Zutat:</label>";
                            echo "<input class='inputZutat' type='text' name='zutat' id='zutatenfeld_1' value='".$key['Name']."' required>";
							echo "<label>Einheit:</label>";
                            include('module/zutat.php');
							echo "<label>Menge:</label>";
                            echo "<input class='inputMenge' type='number' name='menge' id='mengefeld_1' value='".$key['Menge']."' required>";
                            echo "</div>";
						}
					}else echo "Keine Zutaten";
					echo "</div>";
					/* -------------------------Zutaten------------------------------*/

					/* -------------------------Zubereitung------------------------------*/
                    echo "
                            <div class='zubereitung'>
                                <textarea id='zuTextarea'>".$cocktails[0]['Zubereitung']."</textarea>
                            </div>";
					/* -------------------------Zubereitung------------------------------*/

					/* -------------------------Eigenschaften------------------------------*/
					echo "<div class='eigenschaften'>";
					echo "<div class='eigenschaften_head'>Anlass</div>";
					foreach ($anlass as $key) {
						echo "<div class='eigenschaften_elem'>".$key['Trinkanlass']."</div>";
					}

					echo "<div class='eigenschaften_head'>Dekosorte</div>";
					foreach ($deko as $key) {
						echo "<div class='eigenschaften_elem'>".$key['Dekosorte']."</div>";
					}

					echo "<div class='eigenschaften_head'>Geschmacksrichtung</div>";
					foreach ($geschmack as $key) {
						echo "<div class='eigenschaften_elem'>".$key['Geschmacksrichtung']."</div>";
					}

					echo "<div class='eigenschaften_head'>Glastyp</div>";
					foreach ($glas as $key) {
						echo "<div class='eigenschaften_elem'>".$key['Glastyp']."</div>";
					}

					echo "<div class='eigenschaften_head'>Cocktailart</div>";
					foreach ($kat as $key) {
						echo "<div class='eigenschaften_elem'>".$key['Cocktailart']."</div>";
					}
					echo "</div>";
					/* -------------------------Eigenschaften------------------------------*/


                    echo "</div>";
                ?>


			</section>

		</section>
	</body>
<?php
include('module/footer.php')
?>
