<?php 
	
	// $conn
	// include "connect_db.php";

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
			$name = $film[''];					// Fill column name
			$descr = $film['about']; 	// Fill column name
			if (strlen($descr) > 350) {
				$descr = substr($descr, 0, strrpos($descr, " "));
				$descr .= "...";
			}
			$pic = $film['icon']; 				// Fill column name

			echo "<div class='card'><div class='row'><div class='col-s-6 col-md-4'>";
			echo "<img sr='" . $pic . "' style='height: 200px; width: 200px;'></div>";
			echo "<div class='col film-card'>";
			echo "<h5 class='card-title'>" . $name . "</h5>";
			echo "<p class='card-text'>" . $descr . "</p>";
			echo "<div style='position:absolute; bottom:20px;'><a class='btn btn-secondary' href='festival.php?id=" . $film['id_festival'] . "'>Details</a></div></div></div>";

		}
	}



	


?>
