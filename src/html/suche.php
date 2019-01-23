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
//<!---------------------- Post Form ---------------------->
                    include('module/interfaceSQL.php');
                    $search = $_POST['Suche'];
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

//<!---------------------- Anzeige der gesuchten Cocktails---------------------->
                    $cocktails = searchCocktail($cBox,$search);
                    echo "<section id='data'>";
                    if(empty($cocktails)){
                        echo "<div>keine Ergebnisse gefunden</div>";

                    }else{
                        if(!empty($cocktails)){
                            foreach ($cocktails as $key => $value) {
                                echo "<div class= 'showCocktail'>";
                                echo "<span class= 'head'>Cocktail</span>";
                        		echo "<span>".implode("",$value)."</span>";
                                echo "<form method='post' action = 'detail.php'><button name='cocktail' type='submit' value = '".$key."'>Detail</button></form>";
                                echo "</div>";
                        	}
                        }

                    }
                    echo "</section>"
                ?>
			</section>
		</section>
    </body>
<?php
include('module/footer.php')
?>
