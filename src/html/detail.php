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
					getGlas($cID);



                    echo '
        				<div>
                            <input id="cocktailname" type="text" value="'.$detail["cocktail.Name"].'"></>

                            <div class="zutaten">
                            </div>

                            <div class="zubereitung">
                                <textarea rows="4" cols="10">
                                </textarea>
                            <div>';

                    echo '</div>';
                ?>


			</section>

		</section>
	</body>
<?php
include('module/footer.php')
?>
