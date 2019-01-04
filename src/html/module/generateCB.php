<?php

	//---------------------- Cocktailgeschmack ----------------------
function crGeschmack(){
  include('module/pdo_zugang.php');
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
     echo "<input multiple type='checkbox' name='cocktailgeschmack[]' value= " . $wert . ">". $row['Geschmacksrichtung'] ."<br>";
  }
  $conn = null;
}

//<!---------------------- Cocktailglas ---------------------->
function crGlas(){
  include('module/pdo_zugang.php');
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
  $conn = null;
}

//<!---------------------- Cocktailart ---------------------->
function crKategorie(){
  include('module/pdo_zugang.php');
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
     echo "<input type='checkbox' name='cocktailart' value= " . $wert . ">"   . $row['Cocktailart'] ."<br>";
  }
  $conn = null;
}

//	<!---------------------- Dekoration ---------------------->
function crDeko(){
  include('module/pdo_zugang.php');
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
     echo "<input type='checkbox' name='dekoration[]' value= " . $wert . ">"  . $row['Dekosorte'] . "<br>";
  }
  $conn = null;
}

//<!---------------------- Trinkanlass ---------------------->
function crAnlass(){
  include('module/pdo_zugang.php');
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
  $conn = null;
}

?>
