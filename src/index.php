<?php
include('html/module/header.php')
?>
	<body>  
		
		<header class="obere_zeile">
			<div class="obere_zeile_zentrum">
				<div  class="obere_zeile_zentrum_linke_seite">
					Projektseminar Web-Development - Dozentin: Lisa Beutelspacher
				</div>
				<div class="obere_zeile_zentrum_rechte_seite">
					Gruppe 5 Blawath/Kalembasi/Ulrich
				</div>
			</div>
		</header>  
		<div class="zweite_zeile">
			<div class="container_nav">
				<nav>
					<ul class="ebene0">
						<a href="index.php"><img class="logo" src="../img/icon.jpg" alt="Logo" /></a>
						<li><a href="index.php">Home</a></li>
						<li><a href="html/rezepte.php">Rezept suchen</a></li>
						<li><a href="html/cock_erfassen.php">Rezept erfassen</a></li>
						<li><a href="html/er-modell.php">ER-Modell</a></li>
						<li><a href="html/rel_modell.php">Relationen-Modell</a></li>
					</ul>
				</nav>
			</div> 
		</div>
		<div class="space1"></div>
		
		<section id="hauptteil">
			<?php
				$servername = "localhost";
				$username = "pswd18_5";
				$password = "tFTqiEZO";
				$db = "pswd18_5";

				try {
					$conn = new PDO("mysql:host=$servername;dbname=$db;", $username, $password);
					// set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					echo "Connected successfully";
					}
				catch(PDOException $e)
					{
					echo "Connection failed: " . $e->getMessage();
					}
				?>  
			<div id="ueberschrift1">Cocktails</div> 
			
		
			<div id="bullet">
				<div class="bullet0">- abwechslungsreich</div>
				<div class="bullet1">- schnell gemacht</div>
				<div class="bullet2">- erfrischend</div>
				<div class="bullet3">- überzeugend</div>
				<div class="bullet4">- genussvoll</div>
				<div class="bullet5">- beliebt</div>
				<div class="bullet6">- einfach</div>
				<div class="bullet7">- lecker</div>
				<div class="bullet8">- trendy</div>
			</div>
			<div id="ueberschrift2">Immer eine schöne</div> 
			<div id="ueberschrift3">Sache...</div> 
			<div id="laufschrift">
				<div id="lauf"><p>+ + +  Demoversion - keine Gewähr für die Inhalte  + + +  </p></div>
			</div>	
			
		</section>
		
		
		
		<footer>
			<div class="copyright_cont">
				<div class="copyright_text">
					© 2019 Blawath/Kalembasi/Ulrich
				</div>
				
			</div>  
			<div class="footer_nav_cont">
				<nav>
					<ul>
			<!--			<li><a href="index.php">Home</a></li>
						<li>--</li>  -->
						<li><a href="html/impressum.php">Impressum</a></li>
						<li>--</li>
						<li><a href="html/kontakt.php">Kontakt</a></li>
					</ul>
					
				</nav>
				
			</div> 
		</footer>

