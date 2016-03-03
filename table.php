<?php
	// table.php
	
	//getting our config
	require_once ("../../config.php");
	
	//create connection
	$mysql = new mysqli("localhost", $db_username, $db_password, "webpr2016_islam");
	
	//SQL sentence
	$stmt = $mysql->prepare("SELECT id, challengee, motion, start_date, end_date, characters, created FROM debattle_request ");
	
	//if error in sentence
	echo $mysql->error;
	
	//variable for data for each row we will get
	$stmt->bind_result($id, $challengee, $motion, $start_date, $end_date, $characters, $created);

	//query
	$stmt->execute ();
	
	// GET RESULTS
	// we have multiple rows
	while ($stmt->fetch()) {
		
		// Do SOMETHING FOR EACH ROW //the dots are actual spaces
		echo $id." ".$challengee. "<br>";
	}
?>