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
					$cID = $_POST['cocktail'];
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
					echo	$cocktails[0]['Name'];
					echo	"</div>";



					/* -------------------------Zutaten------------------------------*/
                    echo "<div class='zutaten'>";
					echo "<div class='zutatHead'>Zutaten</div><br>";
					if(!empty($zutat)){
						foreach ($zutat as $key) {
							echo "<div class='zutat_Menge'>".$key['Menge']."</div>";
							echo "<div class='zutat_Einheit'>".$key['Einheit']."</div>";
							echo "<div class='zutat_Name'>".$key['Name']."</div><br>";
						}
					}else echo "Keine Zutaten";
					echo "</div>";
					/* -------------------------Zutaten------------------------------*/


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

					echo "<div class='eigenschaften_head'>Alkohol</div>";
					echo "<div class='eigenschaften_elem'>".$cocktails[0]['Alkohol']."</div>";

					echo "</div>";
					/* -------------------------Eigenschaften------------------------------*/

					/* -------------------------Zubereitung------------------------------*/
                    echo "<div class='zubereitung'>";
						echo "<div class='zubereitungHead'>Zubereitung</div><br>";
						echo "<div class='zuTextarea'>".$cocktails[0]['Zubereitung']."</div>";
                    echo "</div>";
					/* -------------------------Zubereitung------------------------------*/

					echo "<div class='detail_buttons'>";
					echo "<form method='post' action = 'update.php'><button class='update' name='update' type='submit' value = '".$cID."'>Ändern</button></form>";
					echo "<form method='post' action = 'delete.php'><button class='delete' name='delete' type='submit' value = '".$cID."'>Löschen</button></form>";
					echo "</div>";

                ?>


			</section>

		</section>
	</body>
<?php
include('module/footer.php')
?>
