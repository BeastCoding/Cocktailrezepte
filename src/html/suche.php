<?php
include('module/header.php');
?>
    <body>
        <section id="hauptteil">
			<section id="hauptteil_schriftarten">
                <?php
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
                    if(!empty( $_POST['art'])){
                        $art = array_merge(array("art"), $_POST['art']);
                        array_push($cBox,$art);
                    }
                    if(!empty( $_POST['deko'])){
                        $deko = array_merge(array("deko"), $_POST['deko']);
                        array_push($cBox,$deko);
                    }
                    if(!empty( $_POST['anlass'])){
                         $anlass  = array_merge(array("anlass"), $_POST['anlass']);
                         array_push($cBox,$anlass);
                    }
                    echo $cBox[0][1]
                ?>
			</section>
		</section>
    </body>
<?php
include('module/footer.php')
?>
