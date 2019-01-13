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
				<form id="" method="post" action="suche.php">
					<div>
						<input type="text" name="Suche" id="tfSuche" required>
						<button type="submit" value="Submit">Suche</button>
					</div>
					<div id="mHandler">
					<?php
					
					//<!---------------------- Accordion---------------------->
						include ('module/generateCB.php');
						echo "<div class='cbStyle'><button class='accordion'>Geschmack</button>";
						echo "<div class='panel'>";
						crGeschmack();
						echo "</div></div>";

						echo "<div class='cbStyle'><button class='accordion'>Glastyp</button>";
						echo "<div class='panel'>";
						crGlas();
						echo "</div></div>";

						echo "<div class='cbStyle'><button class='accordion'>Cocktailart</button>";
						echo "<div class='panel'>";
						crKategorie();
						echo "</div></div>";

						echo "<div class='cbStyle'><button class='accordion'>Dekoration</button>";
						echo "<div class='panel'>";
						crDeko();
						echo "</div></div>";

						echo "<div class='cbStyle'><button class='accordion'>Trinkanlass</button>";
						echo "<div class='panel'>";
						crAnlass();
						echo "</div></div>";

						echo "<div class='cbStyle'><button class='accordion'>Alkoholgehalt</button>";
						echo "<div class='panel'>";
						crAlkohol();
						echo "</div></div>";
					?>
					</div>
				</form>

				//<!---------------------- Accordion---------------------->
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
