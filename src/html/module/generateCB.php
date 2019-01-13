<?php

	//---------------------- Cocktailgeschmack ----------------------
function crGeschmack(){
  include('module/pdo_zugang.php');
  $sql  = 'SELECT *  FROM `geschmack`';
  foreach ($conn->query($sql) as $row) {
     echo "<input multiple type='checkbox' name='geschmack[]' value= " . $row['ID'] . ">". $row['Geschmacksrichtung'] ."<br>";
  }
  $conn = null;
}

//<!---------------------- Cocktailglas ---------------------->
function crGlas(){
  include('module/pdo_zugang.php');
  $sql  = 'SELECT *  FROM `glas`';
  foreach ($conn->query($sql) as $row) {
     echo "<input type='checkbox' name='glas[]' value= " . $row['ID'] . ">" . $row['Glastyp'] . "<br>";
  }
  $conn = null;
}

//<!---------------------- Cocktailart ---------------------->
function crKategorie(){
  include('module/pdo_zugang.php');
  $sql  = 'SELECT *  FROM `kategorie`';
  foreach ($conn->query($sql) as $row) {
     echo "<input type='checkbox' name='kategorie[]' value= " . $row['ID'] . ">"   . $row['Cocktailart'] ."<br>";
  }
  $conn = null;
}

//	<!---------------------- Dekoration ---------------------->
function crDeko(){
  include('module/pdo_zugang.php');
  $sql  = 'SELECT *  FROM `einzeldeko`';
  foreach ($conn->query($sql) as $row) {
     echo "<input type='checkbox' name='einzeldeko[]' value= " . $row['ID'] . ">"  . $row['Dekosorte'] . "<br>";
  }
  $conn = null;
}

//<!---------------------- Trinkanlass ---------------------->
function crAnlass(){
  include('module/pdo_zugang.php');
  $sql  = 'SELECT *  FROM `anlass`';
  foreach ($conn->query($sql) as $row) {
     echo "<input type='checkbox' name='anlass[]' value= " . $row['ID'] . ">" . $row['Trinkanlass'] . "<br>";
  }
  $conn = null;
}

function crAlkohol(){
     echo "<input type='checkbox' name='cocktail[]' value= 'alkoholfrei'> alkoholfrei <br>";
     echo "<input type='checkbox' name='cocktail[]' value= 'mäßig'> mäßig <br>";
     echo "<input type='checkbox' name='cocktail[]' value= 'normal'> normal <br>";
     echo "<input type='checkbox' name='cocktail[]' value= 'stark'> stark <br>";
  }
  $conn = null;

?>
