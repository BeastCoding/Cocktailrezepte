<?php
include('module/header.php')
?>
	<body>  
		
		<header class="obere_zeile">
			<div class="obere_zeile_zentrum">
				<div  class="obere_zeile_zentrum_linke_seite">
					Projektseminar Web-Development --- Dozentin: Lisa Beutelspacher
				</div>
				<div class="obere_zeile_zentrum_rechte_seite">
					Gruppe 5 Blawath/Kalembasi/Ulrich
				</div>
			</div>
		</header>  
				<?php
		include('module/menu.php')
		?>
		<div class="space1"></div>
		<section id="hauptteil">
			<div id="kontakt">
				<form class="links">      
					<input name="name" type="text" class="feedback-input" placeholder="Name" />   
					<input name="email" type="text" class="feedback-input" placeholder="Email" />
					<textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
					<input type="submit" value="Submit to Bastian Blawath"/>
				</form>

				<form class="mitte">      
					<input name="name" type="text" class="feedback-input" placeholder="Name" />   
					<input name="email" type="text" class="feedback-input" placeholder="Email" />
					<textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
					<input type="submit" value="Submit to Burak Kalembasi"/>
				</form>

				<form class ="rechts">      
					<input name="name" type="text" class="feedback-input" placeholder="Name" />   
					<input name="email" type="text" class="feedback-input" placeholder="Email" />
					<textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
					<input type="submit" value="Submit to Norbert Ulrich"/>
				</form>
			</div>
	
		</section>
<?php
include('module/footer.php')
?>

