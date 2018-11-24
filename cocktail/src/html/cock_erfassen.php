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
		<section id="hauptteil" >
			<form  action="formular.php" method="post">
				<fieldset >
					<legend>Einen neuen Cocktail kreieren</legend> 
					Name des Cocktails: 
					<input type="text" name ="cocktailname">
				</fieldset>
				<fieldset >
					<legend>Zubereitung</legend> 
					<textarea></textarea>
				</fieldset>
				<fieldset class="fieldset-auto-width">
					<legend>Zutaten</legend> 
					Zutat  1  : 
					<input class="feldgroesse" type="text" name ="zutat1">
					<select class="feldgroesse" name="Einheit" size="1">
						<option  class="feldgroesse" alue="e11">Gramm</option>
						<option  class="feldgroesse" value="e12">cl</option>
						<option  class="feldgroesse" value="e13">Stück</option>
						<option  class="feldgroesse" value="e14">Scheibe</option>
						<option  class="feldgroesse" value="e15">ml</option>
						<option  class="feldgroesse" value="e16">Prise</option>
						<option  class="feldgroesse" value="e17">EL</option>
					</select>
					  Menge:
					<input  class="feldgroesse" type="text" name ="menge1">
					<br>
					Zutat  2  : 
					<input class="feldgroesse" type="text" name ="zutat2">
					<select class="feldgroesse" name="Einheit" size="1">
						<option class="feldgroesse" value="e21">Gramm</option>
						<option  class="feldgroesse" value="e22">cl</option>
						<option  class="feldgroesse" value="e23">Stück</option>
						<option  class="feldgroesse" value="e24">Scheibe</option>
						<option  class="feldgroesse" value="e25">ml</option>
						<option  class="feldgroesse" value="e26">Prise</option>
						<option  class="feldgroesse" value="e27">EL</option>
					</select>
					  Menge:
					<input  class="feldgroesse" class="feldgroesse" type="text" name ="menge2">
					<br>
					Zutat  3  : 
					<input  class="feldgroesse" type="text" name ="zutat3">
					<select  class="feldgroesse" name="Einheit" size="1">
						<option  class="feldgroesse" value="e31">Gramm</option>
						<option  class="feldgroesse" value="e32">cl</option>
						<option  class="feldgroesse" value="e33">Stück</option>
						<option  class="feldgroesse" value="e34">Scheibe</option>
						<option  class="feldgroesse" value="e35">ml</option>
						<option  class="feldgroesse" value="e36">Prise</option>
						<option  class="feldgroesse" value="e37">EL</option>
					</select>
					  Menge:
					<input  class="feldgroesse" type="text" name ="menge3">
					<br>
					Zutat  4  : 
					<input  class="feldgroesse" type="text" name ="zutat4">
					<select  class="feldgroesse" name="Einheit" size="1">
						<option  class="feldgroesse" value="e41">Gramm</option>
						<option  class="feldgroesse" value="e42">cl</option>
						<option  class="feldgroesse" value="e43">Stück</option>
						<option  class="feldgroesse" value="e44">Scheibe</option>
						<option  class="feldgroesse" value="e45">ml</option>
						<option  class="feldgroesse" value="e46">Prise</option>
						<option  class="feldgroesse" value="e47">EL</option>
					</select>
					  Menge:
					<input  class="feldgroesse" type="text" name ="menge4">
					<br>
					Zutat  5  : 
					<input  class="feldgroesse" type="text" name ="zutat5">
					<select  class="feldgroesse" name="Einheit" size="1">
						<option  class="feldgroesse" value="e51">Gramm</option>
						<option  class="feldgroesse" value="e52">cl</option>
						<option  class="feldgroesse" value="e53">Stück</option>
						<option  class="feldgroesse" value="e54">Scheibe</option>
						<option  class="feldgroesse" value="e55">ml</option>
						<option  class="feldgroesse" value="e56">Prise</option>
						<option  class="feldgroesse" value="e57">EL</option>
					</select>
					  Menge:
					<input class="feldgroesse" type="text" name ="menge5">
					<br>
					Zutat  6  : 
					<input  class="feldgroesse" type="text" name ="zutat6">
					<select  class="feldgroesse" name="Einheit" size="1">
						<option  class="feldgroesse" value="e61">Gramm</option>
						<option  class="feldgroesse" value="e62">cl</option>
						<option  class="feldgroesse" value="e63">Stück</option>
						<option  class="feldgroesse" value="e64">Scheibe</option>
						<option  class="feldgroesse" value="e65">ml</option>
						<option  class="feldgroesse" value="e66">Prise</option>
						<option  class="feldgroesse" value="e67">EL</option>
					</select>
					  Menge:
					<input  class="feldgroesse" type="text" name ="menge6">
					<br>
					Zutat  7  : 
					<input  class="feldgroesse" type="text" name ="zutat7">
					<select  class="feldgroesse" name="Einheit" size="1">
						<option  class="feldgroesse" value="e71">Gramm</option>
						<option  class="feldgroesse" value="e72">cl</option>
						<option  class="feldgroesse" value="e73">Stück</option>
						<option  class="feldgroesse" value="e74">Scheibe</option>
						<option  class="feldgroesse" value="e75">ml</option>
						<option  class="feldgroesse" value="e76">Prise</option>
						<option  class="feldgroesse" value="e77">EL</option>
					</select>
					  Menge:
					<input  class="feldgroesse" type="text" name ="menge7">
					
					<br>
					Zutat  8  : 
					<input  class="feldgroesse" type="text" name ="zutat8">
					<select  class="feldgroesse" name="Einheit" size="1">
						<option  class="feldgroesse" value="e81">Gramm</option>
						<option  class="feldgroesse" value="e82">cl</option>
						<option  class="feldgroesse" value="e83">Stück</option>
						<option  class="feldgroesse" value="e84">Scheibe</option>
						<option  class="feldgroesse" value="e85">ml</option>
						<option  class="feldgroesse" value="e86">Prise</option>
						<option  class="feldgroesse" value="e87">EL</option>
					</select>
					  Menge:
					<input  class="feldgroesse" type="text" name ="menge9">
					<br>
					Zutat  9  : 
					<input  class="feldgroesse" type="text" name ="zutat8">
					<select  class="feldgroesse" name="Einheit" size="1">
						<option  class="feldgroesse" value="e91">Gramm</option>
						<option  class="feldgroesse" value="e92">cl</option>
						<option  class="feldgroesse" value="e93">Stück</option>
						<option  class="feldgroesse" value="e94">Scheibe</option>
						<option  class="feldgroesse" value="e95">ml</option>
						<option  class="feldgroesse" value="e96">Prise</option>
						<option  class="feldgroesse" value="e97">EL</option>
					</select>
					  Menge:
					<input  class="feldgroesse" ype="text" name ="menge9">
					<br>
				</fieldset>
				
				<fieldset class="fieldset-auto-width">
					<legend>Cocktailgeschmack</legend> 
					<input type="checkbox" name="geschmack" value="suess">süß<br>
					<input type="checkbox" name="geschmack" value="short">sauer<br>
					<input type="checkbox" name="geschmack" value="hot">fruchtig<br>
					<input type="checkbox" name="geschmack" value="scharf">scharf<br>
					<input type="checkbox" name="geschmack" value="funky">funky<br>
					<input type="checkbox" name="geschmack" value="spritzig">spritzig<br>
					<input type="checkbox" name="geschmack" value="cremig">cremig<br>
					<input type="checkbox" name="geschmack" value="fruchtig">fruchtig<br>
					<input type="checkbox" name="geschmack" value="wuerzig">würzig<br>
					<input type="checkbox" name="geschmack" value="aroma">aromatisch<br>
					<input type="checkbox" name="geschmack" value="trocken">trocken<br>
					<input type="checkbox" name="geschmack" value="bitter">bitter<br>
					<br>
				</fieldset>
				<fieldset class="fieldset-auto-width">
					<legend>Cocktailglas</legend> 
					<input type="checkbox" name="glas" value="tumbler">Tumbler<br>
					<input type="checkbox" name="glas" value="highball">Highballglas<br>
					<input type="checkbox" name="glas" value="ballon">Ballonglas<br>
					<input type="checkbox" name="glas" value="schale">Cocktailschale<br>
					<input type="checkbox" name="glas" value="becher">Cocktailbecher<br>
					<input type="checkbox" name="glas" value="nosing">Nosing Glas<br>
					<input type="checkbox" name="glas" value="shooter">Shooter Glas<br>
					<input type="checkbox" name="glas" value="martini">Martiniglas<br>
					<input type="checkbox" name="glas" value="becherglas">Becherglas<br>
					<input type="checkbox" name="glas" value="punsch">Punschglas<br>
					<input type="checkbox" name="glas" value="silber">Silberbecher<br>
					<input type="checkbox" name="glas" value="tiki">Tiki-Mug<br>
					<br>
				</fieldset>
				<fieldset class="fieldset-auto-width">
					<legend>Cocktailart</legend> 
					<input type="checkbox" name="art" value="long">Longdrink<br>
					<input type="checkbox" name="art" value="short">Shortdrink<br>
					<input type="checkbox" name="art" value="hot"> Hotdrink<br>
					<input type="checkbox" name="art" value="bowle">Bowle<br>
					<input type="checkbox" name="art" value="shoot">Shooter<br>
					<input type="checkbox" name="art" value="sekt">Sektcocktail<br>
					<br>
				</fieldset>
				<fieldset class="fieldset-auto-width">
					<legend>Dekoration</legend> 
					<input type="checkbox" name="deko" value="fruechte">Früchte<br>
					<input type="checkbox" name="deko" value="beeren">Beeren<br>
					<input type="checkbox" name="deko" value="orangen">Orangenspieß<br>
					<input type="checkbox" name="deko" value="zitrus">Zitruslocken<br>
					<input type="checkbox" name="deko" value="olive">Olive<br>
					<input type="checkbox" name="deko" value="minze">Minzezweig<br>
					<br>
				</fieldset>
				<fieldset class="fieldset-auto-width">
					<legend>Trinkanlass</legend> 
					<input type="checkbox" name="anlass" value="aperitif">Aperitif<br>
					<input type="checkbox" name="anlass" value="after">After-Dinner<br>
					<input type="checkbox" name="anlass" value="digestif">Digestif<br>
					<input type="checkbox" name="anlass" value="dessert">Dessert<br>
					<input type="checkbox" name="anlass" value="corpse">Corpse Reviver<br>
					<br>
				</fieldset>
				<fieldset class="fieldset-auto-width">
					<legend>Alkoholgehalt</legend> 
					<input type="checkbox" name="alkohol" value="frei">alkoholfrei<br>
					<input type="checkbox" name="alkohol" value="maessig">mäßig<br>
					<input type="checkbox" name="alkohol" value="normal">normal<br>
					<input type="checkbox" name="alkohol" value="stark">stark<br>
					<br>
				</fieldset>
				<input type="Submit" name="speichern" value="speichern">
			</form>
				
			
		</section>
<?php
include('module/footer.php')
?>


