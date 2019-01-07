<?php
include('module/header.php');
include('module/pdo_zugang.php');
?>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<body>
	<?php
		include('module/menu.php')
		?>
	<div class="space1"></div>
	<section id="hauptteil">
		<form method="get" action="db_insert.php">

			<!---------------------- Cocktailname ---------------------->
			<fieldset>
				<legend>Einen neuen Cocktail kreieren</legend>
				Name des Cocktails:
				<input type="text" name="cocktailname" required>
			</fieldset>
			<!---------------------- Cocktailname ---------------------->

			<!---------------------- Zubereitung ---------------------->
			<fieldset>
				<legend>Zubereitung</legend>
				<textarea></textarea>
			</fieldset>
			<!---------------------- Zubereitung ---------------------->

			<!---------------------- Zutaten ---------------------->
			<fieldset class="fieldset-auto-width">
				<legend>Zutaten</legend>
				<div id="input1" class="clonedInput">
					<label>Zutat:</label>
					<!------------------------------------------------------------------------->
					<input class="clonedInputZutat" type="text" name="zutat[]" id="zutatenfeld_1" required>
					<!------------------------------------------------------------------------->
					<label>Einheit:</label>
					<select class="cloneInputEinheit" name="einheit[]" size="1" id="einheiten_1">
						<option class="feldgroesse" value="e11">Gramm</option>
						<option class="feldgroesse" value="e12">cl</option>
						<option class="feldgroesse" value="e13">Stück</option>
						<option class="feldgroesse" value="e14">Scheibe</option>
						<option class="feldgroesse" value="e15">ml</option>
						<option class="feldgroesse" value="e16">Prise</option>
						<option class="feldgroesse" value="e17">EL</option>
					</select>
					<label>Menge:</label>
					<input class="cloneInputMenge" type="number" name="menge[]" id="mengefeld_1" required>
				</div>
				<br>
				<button id="btnAdd" type="button">+</button>
				<button id="btnDel" type="button" disabled="disabled">-</button>
			</fieldset>
			<!---------------------- Zutaten ---------------------->

			<!---------------------- Cocktailgeschmack ---------------------->
			<fieldset class="fieldset-auto-width">
				<legend>Cocktailgeschmack</legend>
				<?php
						$sql  = 'SELECT *  FROM `geschmack`';
						foreach ($conn->query($sql) as $row) {
							switch				 ($row['ID'])
							{
								case 2:
									$wert = "süß";
								break;
								case 3:
									$wert = "sauer";
								break;
								case 4:
									$wert = "fruchtig";
								break;
								case 5:
									$wert = "scharf";
								break;
								case 6:
									$wert = "funky";
								break;
								case 7:
									$wert = "spritzig";
								break;
								case 8:
									$wert = "cremig";
								break;
								case 9:
									$wert = "würzig";
								break;
								case 10:
									$wert = "aromatisch";
								break;
								case 11:
									$wert = "trocken";
								break;
								case 12:
									$wert = "bitter";
								break;
							}
						   echo "<input multiple type='checkbox' name='cocktailgeschmack[]' value= " . $wert . ">" . $row['Geschmacksrichtung'] . "<br>";
						}
					?>
				<br>
			</fieldset>
			<!---------------------- Cocktailgeschmack ---------------------->

			<!---------------------- Cocktailglas ---------------------->
			<fieldset class="fieldset-auto-width">
				<legend>Cocktailglas</legend>
				<?php
						$sql  = 'SELECT *  FROM `glas`';
						foreach ($conn->query($sql) as $row) {
							switch				 ($row['ID'])
							{
								case 1:
									$wert = "Tumbler";
								break;
								case 2:
									$wert = "Highballglas";
								break;
								case 3:
									$wert = "Ballonglas";
								break;
								case 4:
									$wert = "Cocktailschale";
								break;
								case 5:
									$wert = "Cocktailbecher";
								break;
								case 6:
									$wert = "Nosing Glas";
								break;
								case 7:
									$wert = "Shooter Glas";
								break;
								case 8:
									$wert = "Martiniglas";
								break;
								case 9:
									$wert = "Becherglas";
								break;
								case 10:
									$wert = "Punschglas";
								break;
								case 11:
									$wert = "Silberbecher";
								break;
								case 12:
									$wert = "Tiki-Mug";
								break;
							}
						   echo "<input type='checkbox' name='cocktailglas[]' value= " . $wert . ">" . $row['Glastyp'] . "<br>";
						}
					?>
				<br>
			</fieldset>
			<!---------------------- Cocktailglas ---------------------->

			<!---------------------- Cocktailart ---------------------->
			<fieldset class="fieldset-auto-width">
				<legend>Cocktailart</legend>
				<?php
						$sql  = 'SELECT *  FROM `kategorie`';
						foreach ($conn->query($sql) as $row) {
							switch				 ($row['ID'])
							{
								case 1:
									$wert = "Longdrink";
								break;
								case 2:
									$wert = "Shortdrink";
								break;
								case 3:
									$wert = "Hotdrink";
								break;
								case 4:
									$wert = "Bowle";
								break;
								case 5:
									$wert = "Shooter";
								break;
								case 6:
									$wert = "Sektcocktail";
								break;
							}
						   echo "<input type='radio' name='cocktailart' value= " . $wert . ">" . $row['Cocktailart'] . "<br>";
						}
					?>
				<br>
			</fieldset>
			<!---------------------- Cocktailart ---------------------->


			<!---------------------- Dekoration ---------------------->
			<fieldset class="fieldset-auto-width">
				<legend>Dekoration</legend>
				<?php
						$sql  = 'SELECT *  FROM `einzeldeko`';
						foreach ($conn->query($sql) as $row) {
							switch				 ($row['ID'])
							{
								case 1:
									$wert = "Früchte";
								break;
								case 2:
									$wert = "Beeren";
								break;
								case 3:
									$wert = "Orangenspieß";
								break;
								case 4:
									$wert = "Zitruslocken";
								break;
								case 5:
									$wert = "Olive";
								break;
								case 6:
									$wert = "Minzezweig";
								break;
							}
						   echo "<input type='checkbox' name='dekoration[]' value= " . $wert . ">" . $row['Dekosorte'] . "<br>";
						}
					?>
				<br>
			</fieldset>
			<!---------------------- Dekoration ---------------------->

			<!---------------------- Trinkanlass ---------------------->
			<fieldset class="fieldset-auto-width">
				<legend>Trinkanlass</legend>
				<?php
						$sql  = 'SELECT *  FROM `anlass`';
						foreach ($conn->query($sql) as $row) {
							switch				 ($row['ID'])
							{
								case 1:
									$wert = "Aperitif";
								break;
								case 2:
									$wert = "After-Dinner";
								break;
								case 3:
									$wert = "Digestif";
								break;
								case 4:
									$wert = "Dessert";
								break;
								case 5:
									$wert = "Corpse Reviver";
								break;
							}
						   echo "<input type='checkbox' name='trinkanlass[]' value= " . $wert . ">" . $row['Trinkanlass'] . "<br>";
						}
					?>
				<br>
			</fieldset>
			<!---------------------- Trinkanlass ---------------------->


			<!---------------------- Alkoholgehalt ---------------------->
			<fieldset class="fieldset-auto-width">
				<legend>Alkoholgehalt</legend>
				<input type="radio" name="alkoholgehalt" value="frei">alkoholfrei<br>
				<input type="radio" name="alkoholgehalt" value="maessig">mäßig<br>
				<input type="radio" name="alkoholgehalt" value="normal">normal<br>
				<input type="radio" name="alkoholgehalt" value="stark">stark<br>
				<br>
			</fieldset>
			<!---------------------- Alkoholgehalt ---------------------->

			<input type="Submit" value="Absenden" id="checkBtn">
		</form>
	</section>

	<!---------------------- Zutat addieren Script ---------------------->
	<script>
		$('#btnAdd').click(function() {
			var num = $('.clonedInput').length;
			var newNum = new Number(num + 1);
			var newElem = $('#input' + num).clone().attr('id', 'input' + newNum);
			newElem.children('#zutatenfeld_' + num).attr('id', 'zutatenfeld_' + newNum);
			newElem.children('#einheiten_' + num).attr('id', 'einheiten_' + newNum);
			newElem.children('#mengefeld_' + num).attr('id', 'mengefeld_' + newNum);
			$('#input' + num).after(newElem);
			$('#btnDel').attr('disabled', false);
			if (newNum == 10)
				$('#btnAdd').attr('disabled', 'disabled');
		});

		$('#btnDel').click(function() {
			var num = $('.clonedInput').length;
			$('#input' + num).remove();
			$('#btnAdd').attr('disabled', false);
			if (num - 1 == 1)
				$('#btnDel').attr('disabled', 'disabled');

		});
	</script>
	<!---------------------- Zutat addieren Script ---------------------->


		<?php 
	$conn = null;
	?>
		<?php
include('module/footer.php')
?>