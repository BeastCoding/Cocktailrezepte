<?php

//function for select statement
function select_Sql($select,$from,$where){
	$query = "SELECT"+$select+"FROM"+$from+"WHERE"+$where;
	$res = mysqli_query($con, $query);
	return mysqli_fetch_assoc($res);
}

//funktion for join statement
function join_Sql($select,$from,$join,$on){
	$query = "SELECT"+$select+"FROM"+$from+$join+"ON"+$on;
	$res = mysqli_query($con, $query);
	return mysqli_fetch_assoc($res);
	
}





function write_Sql(,,){
	
}

function read_Sql(,,){
	
}

?>