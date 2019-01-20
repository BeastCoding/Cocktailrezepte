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
				<form id="form_rezepte" method="post" action="Status.php">
				</form>
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
                            echo "<input class='inputZutat' type='text' name='zutat' id='zutatenfeld_1' value='".$key['Name']."' readonly>";
							echo "<label>Einheit:</label>";
							echo "<input class='inputZutat' type='text' name='zutat' id='zutatenfeld_1' value='".$key['Einheit']."' readonly>";
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
					$check = array();
					foreach ($geschmack as $key) {
						array_push($check, $key['ID']);
					}
					include ('module/generateCB.php');
					echo "<div class='cbStyle'><button class='accordion'>Geschmack</button>";
					echo "<div class='panel'>";
					crGeschmack($check);
					echo "</div></div>";

					$check = array();
					foreach ($glas as $key) {
						array_push($check, $key['ID']);
					}
					echo "<div class='cbStyle'><button class='accordion'>Glastyp</button>";
					echo "<div class='panel'>";
					crGlas($check);
					echo "</div></div>";

					$check = array();
					foreach ($kat as $key) {
						array_push($check, $key['ID']);
					}
					echo "<div class='cbStyle'><button class='accordion'>Cocktailart</button>";
					echo "<div class='panel'>";
					crKategorie($check);
					echo "</div></div>";

					$check = array();
					foreach ($deko as $key) {
						array_push($check, $key['ID']);
					}
					echo "<div class='cbStyle'><button class='accordion'>Dekoration</button>";
					echo "<div class='panel'>";
					crDeko($check);
					echo "</div></div>";

					$check = array();
					foreach ($anlass as $key) {
						array_push($check, $key['ID']);
					}
					echo "<div class='cbStyle'><button class='accordion'>Trinkanlass</button>";
					echo "<div class='panel'>";
					crAnlass($check);
					echo "</div></div>";


					array_push($check, $cocktails[0]['Alkohol']);
					echo "<div class='cbStyle'><button class='accordion'>Alkoholgehalt</button>";
					echo "<div class='panel'>";
					crAlkohol($check);
					echo "</div></div>";
					/* -------------------------Eigenschaften------------------------------*/


                    echo "</div>";
                ?>
				<script>
				var acc = document.getElementsByClassName("accordion");
				var i;

				for (i = 0; i < acc.length; i++) {
				  acc[i].addEventListener("click", function() {
				    this.classList.toggle("active");
				    var panel = this.nextElementSibling;
				    if (panel.style.maxHeight){
				      panel.style.maxHeight = null;
				    } else {
				      panel.style.maxHeight = panel.scrollHeight + "px";
				    }
				  });
				}

				</script>


			</section>

		</section>
	</body>
<?php
include('module/footer.php')
?>
