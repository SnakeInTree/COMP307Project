<?php 
	
	include "connect_db.php";

	

	$term = $_GET['search_term'];

	$sqlquery = "SELECT * FROM FilmFestInfo
            WHERE (`FilmFestName` LIKE '%".$term."%') OR (`EventType` LIKE '%".$term."%') OR (`ContactLocation` LIKE '%".$term."%') OR (`Venue` LIKE '%".$term."%')";	

	 $result = $conn->query($sqlquery);
	// Error when querying db
	 if (!$result) {
	 	echo "<p>Search error: " . $conn->error;
	 	exit();
	 }
	// // No matching festivals
	if ($result->num_rows == 0) {
	 	echo "<p><i>No matching festivals found.</p>";
	 	exit();
	 }
	while ($row = $result->fetch_assoc()) {
	// 	// Create cards for each festival
		$name = $row['FilmFestName'];	
		echo $name;
		$descr = $row['About']; 			
	if (strlen($descr) > 350) {
	 		$descr = substr($descr, 0, strrpos($descr, " "));
			$descr .= "...";
	 }
	 	$pic = $film['Icon']; 				// Fill column name
	 	echo "<div class='card' " . "id='card_" . $film['id_festival'] . "'><div class='row'><div class='col-s-6 col-md-4'>";
	 	echo "<img src='" . $pic . "' style='height: 200px; width: 200px;'></div>";
	 	echo "<div class='col card-contents'>";
	 	echo "<h5 class='card-title'>" . $name . "</h5>";
	 	echo "<p class='card-text'>" . $descr . "</p>";
	 	echo "<div style='position:absolute; bottom:20px;'><a class='btn btn-secondary' href='festival.php?id=" . $film['id_festival'] . "'>Details</a></div></div></div>";
	}
	
?>