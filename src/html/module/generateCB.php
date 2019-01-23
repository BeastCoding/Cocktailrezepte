<?php
//---------------------- Cocktailgeschmack ----------------------
function crGeschmack($check){
include('module/pdo_zugang.php');
$sql  = 'SELECT *  FROM `geschmack`';
foreach ($conn->query($sql) as $row) {
  if(in_array($row['ID'],$check)){
      echo "<input form='form_rezepte' type='checkbox' name='geschmack[]' value= " . $row['ID'] . " checked>". $row['Geschmacksrichtung'] ."<br>";
  }else{
       echo "<input form='form_rezepte' type='checkbox' name='geschmack[]' value= " . $row['ID'] . ">". $row['Geschmacksrichtung'] ."<br>";
  }
}
$conn = null;
}

//<!---------------------- Cocktailglas ---------------------->
function crGlas($check){
include('module/pdo_zugang.php');
$sql  = 'SELECT *  FROM `glas`';
foreach ($conn->query($sql) as $row) {
  if(in_array($row['ID'],$check)){
      echo "<input form='form_rezepte' type='checkbox' name='glas[]' value= " . $row['ID'] . " checked>" . $row['Glastyp'] . "<br>";
  }else{
       echo "<input form='form_rezepte' type='checkbox' name='glas[]' value= " . $row['ID'] . ">" . $row['Glastyp'] . "<br>";
  }
}
$conn = null;
}

//<!---------------------- Cocktailart ---------------------->
function crKategorie($check){
include('module/pdo_zugang.php');
$sql  = 'SELECT *  FROM `kategorie`';
foreach ($conn->query($sql) as $row) {
  if(in_array($row['ID'],$check)){
      echo "<input form='form_rezepte' type='radio' name='kategorie[]' value= " . $row['ID'] . " checked>"   . $row['Cocktailart'] ."<br>";
  }else{
      echo "<input form='form_rezepte' type='radio' name='kategorie[]' value= " . $row['ID'] . ">"   . $row['Cocktailart'] ."<br>";
  }

}
$conn = null;
}

//	<!---------------------- Dekoration ---------------------->
function crDeko($check){
include('module/pdo_zugang.php');
$sql  = 'SELECT *  FROM `einzeldeko`';
foreach ($conn->query($sql) as $row) {
  if(in_array($row['ID'],$check)){
      echo "<input form='form_rezepte' type='checkbox' name='einzeldeko[]' value= " . $row['ID'] . " checked>"  . $row['Dekosorte'] . "<br>";
  }else{
       echo "<input form='form_rezepte' type='checkbox' name='einzeldeko[]' value= " . $row['ID'] . ">"  . $row['Dekosorte'] . "<br>";
  }

}
$conn = null;
}

//<!---------------------- Trinkanlass ---------------------->
function crAnlass($check){
include('module/pdo_zugang.php');
$sql  = 'SELECT *  FROM `anlass`';
foreach ($conn->query($sql) as $row) {
  if(in_array($row['ID'],$check)){
        echo "<input form='form_rezepte' type='checkbox' name='anlass[]' value= " . $row['ID'] . " checked>" . $row['Trinkanlass'] . "<br>";
  }else{
        echo "<input form='form_rezepte' type='checkbox' name='anlass[]' value= " . $row['ID'] . ">" . $row['Trinkanlass'] . "<br>";
  }

}
$conn = null;
}

function crAlkohol($check){
if(in_array('alkoholfrei',$check)){
    echo "<input form='form_rezepte' type='radio' name='cocktail[]' value= 'alkoholfrei' checked> alkoholfrei <br>";
}else{
    echo "<input form='form_rezepte' type='radio' name='cocktail[]' value= 'alkoholfrei'> alkoholfrei <br>";
}
if(in_array('mäßig',$check)){
     echo "<input form='form_rezepte' type='radio' name='cocktail[]' value= 'mäßig' checked> mäßig <br>";
}else{
     echo "<input form='form_rezepte' type='radio' name='cocktail[]' value= 'mäßig'> mäßig <br>";
}
if(in_array('normal',$check)){
     echo "<input form='form_rezepte' type='radio' name='cocktail[]' value= 'normal' checked> normal <br>";
}else{
     echo "<input form='form_rezepte' type='radio' name='cocktail[]' value= 'normal'> normal <br>";
}
if(in_array('stark',$check)){
     echo "<input form='form_rezepte' type='radio' name='cocktail[]' value= 'stark' checked> stark <br>";
}else{
     echo "<input form='form_rezepte' type='radio' name='cocktail[]' value= 'stark'> stark <br>";
}




}
$conn = null;

?>
