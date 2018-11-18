<?php 
	
	// $conn
	include "connect_db.php";

	// Check what user searched
	if (isset($_POST['input']) && $_POST['input'] != "") {
		$sqlquery = "SELECT * FROM film_festivals WHERE " . $_{ like ;

		$result = $conn->query($sqlquery);

		if (!$result) {
			echo "<p><i>No matching festivals found.</p>";
			exit();
		}

		$films = $result->fetch_assoc();
		foreach ($films as $film) {

		}
	}

	


?>